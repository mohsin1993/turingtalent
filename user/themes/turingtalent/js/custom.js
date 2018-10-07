(function ($) {
  'use strict';

  $(init);

  const signUpTableID = "app4QLkg922q3alKE";
  const pricingTableID = "appd6kVCdE1rvU09g";
  const loader = '<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>';
  
  const clearbit = axios.create({
    headers: {"Authorization": "Bearer sk_087804f26c8aac10230bed129295c2ec"}
  });
  
  const airTable = axios.create({
    headers: {"Authorization": "Bearer keyYcmhufGC3SvYAH"}
  });
  
  var tabContainer = ".tab-containers",
    tabList = ".tabs-list",
    options = ".options";

  function init(params) {
    initTabs();
    initOptions();
    calculatePrice();
    
    $("form").on("submit", function (e) {
      e.preventDefault();
      if ($(this).hasClass("step1")) {
        fetchClearbit($(this).find("input[name=Email]").val());
      }
      else if ($(this).hasClass("step2")) {
        signup();
      }
    });
  }

  //for requiring a script loaded asynchronously.
function loadAsync(src, callback, relative){
  var baseUrl = "/resources/script/";
  var script = document.createElement('script');
  if(relative === true){
      script.src = baseUrl + src;  
  }else{
      script.src = src; 
  }

  if(callback !== null){
      if (script.readyState) { // IE, incl. IE9
          script.onreadystatechange = function() {
              if (script.readyState == "loaded" || script.readyState == "complete") {
                  script.onreadystatechange = null;
                  callback();
              }
          };
      } else {
          script.onload = function() { // Other browsers
              callback();
          };
      }
  }
  document.getElementsByTagName('head')[0].appendChild(script);
}

  function loadScript(url) {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = url;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  }

  function signup() {
    var paramObj = {}, airTableURL = 'https://api.airtable.com/v0/'+signUpTableID+'/';
    
    $.each($('form.step2').serializeArray(), function (_, kv) {
      paramObj[kv.name] = kv.value;
    });
    
    $(".step2 button").html(loader);
    
    airTable.get(airTableURL + "Users?filterByFormula=Email='" + encodeURIComponent(paramObj['Email']) + "'").then(function (resp) {
      if (resp.data.records && resp.data.records.length > 0)
        return airTable.put(airTableURL + "Users/" + resp.data.records[0].id, { fields: paramObj });
      return airTable.post(airTableURL + "Users", { fields: paramObj });
    }).then(function (resp) {
      $(".signup .step2").slideUp();
      $(".signup .step3").slideDown();
      loadAsync("https://assets.calendly.com/assets/external/widget.js", function () {
        setTimeout(() => {
          $(".calendly-loader").slideUp();
          $(".calendly-inline-widget").slideDown();
        }, 3000);
      });
    }).catch(function () {
      console.log("Something went wrong!");
    });
  }

  function fetchClearbit(email) {
    if (validateEmail(email)) {
      $(".step1 button").html(loader);
      clearbit.get('https://person-stream.clearbit.com/v2/combined/find?email=' + email).then(function (resp) {
        loadSecondForm(resp.data, email);
      }).catch(function(resp) {
        var obj = { person: { email: email } };
        loadSecondForm(obj)
      });
    } else {
      $(".step1 input[name=email]").addClass("error");
      $(".step1 .alert.alert-danger").slideDown("slow");
    }
  }

  function navigateTab(selector) {
    $(tabList + " li").removeClass("active");
    $("a[href='"+selector+"']").closest("li").addClass("active");
    $(tabContainer).find('.tab-content').removeClass("active");
    $(tabContainer).find(selector).addClass("active");
  }

  function calculatePrice() {
    var params = {
      Language: "",
      Experience: "",
      Developers: "",
      Services: ""
    }, filters = [], airTableURL = 'https://api.airtable.com/v0/'+pricingTableID+'/';

    $(".tab-content .options").each(function () {
      var key = this.dataset.key;
      var val = $(this).find(".option.active")[0].dataset.value;
      params[key] = val;
    });

    $(".price-label .loader").slideDown("fast");
    
    airTable.get(airTableURL + "mapping-table?filterByFormula=Language='" + encodeURIComponent(params.Language) + "'")
      .then(function (resp) {
        params['Language'] = resp.data.records[0].fields.Type;
        return params;
      })
      .then(function (params) {
        for (var key in params) {
          filters.push(key+"='"+encodeURIComponent(params[key])+"'");
        }
        return airTable.get(airTableURL + 'pricing-table?filterByFormula=AND(' + filters.join(',') + ')')
      })
      .then(function (priceResp) {
        $(".price-label .value").html("$"+priceResp.data.records[0].fields['Price per month ($)'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
        $(".price-label .loader").slideUp("fast", function (params) {
          return true;
        });
      });
  }

  function initTabs(params) {
    $(tabList + " li").on("click", function (e) {
      e.preventDefault();
      navigateTab(e.target.hash);
    })

    $(".tab-content button.next").on("click", function (e) {
      var containerSelector = $(this).data("href")
      navigateTab(containerSelector);
    })
  }

  function initOptions() {
    $(options + " .option").on("click", function (e) {
      if (!$(this).hasClass("active")) {
        $(tabContainer + " .tab-content.active").find(".option").removeClass("active");
        $(this).addClass("active");
        calculatePrice();
      }
    })
  }

  function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

  function loadSecondForm(data, email) {
    var form = $(".step2");
    var email = (data && data.person && data.person.email) ? data.person.email : email;
    var name = (data && data.person && data.person.name && data.person.name.fullName) ? data.person.name.fullName : '';
    var company = (data && data.company && data.company.name) ? data.company.name : '';
    var website = (data && data.company && data.company.domain) ? data.company.domain : '';

    form.find("[name='Email']").val(email);
    form.find("[name='Name']").val(name);
    form.find("[name='Company']").val(company);
    form.find("[name='Website']").val(website);

    $(".signup .step1").slideUp();
    $(".signup .step2").slideDown();
    $("html, body").animate({ scrollTop: $(document).height() }, 1200);
  }
})(jQuery);