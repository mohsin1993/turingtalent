axios.defaults.headers.common = {
  "Authorization": "Bearer sk_087804f26c8aac10230bed129295c2ec",
};

// var elems = {
//   addClass: function (selector, className) {
//     document.querySelectorAll(selector).forEach(function (el) {
//       el.classList.addClass(className);
//     });
//   },
//   removeClass: function (selector, className) {
//     document.querySelectorAll(selector).forEach(function (el) {
//       el.classList.removeClass(className);
//     });
//   }
// }

// function tabs(selector, tabsContainer) {
//   var self = this;

//   self.tab = selector;
//   self.tabsContainer = tabsContainer;
//   self.tabElem = document.querySelector(self.tab);
//   self.tabsContainerElem = document.querySelector(self.tabsContainer);
  
//   self.init = function () {
//     self.tabElem.querySelectorAll("li").forEach(function (el) {
//       el.querySelector("a[href]").addEventListener("click", function (e) {
//         self.openTab(this.getAttribute("href"));
//       });
//     });
//   }

//   self.openTab = function (tabLink) {
//     elems.addClass(self.tabElem.querySelector("a[href="+tabLink+"]").closest("li"), 'active');
//     self.tabElem.querySelectorAll("");
//     elems.removeClass('.tab-containers .tab-content', 'active');
//     elems.addClass(tabLink, 'active');
//   }
// }

// var tabs = {
//   init: function (selector, className) {
//     document.querySelectorAll(selector).forEach(function (el) {
//       el.classList.addClass(className);
//     });
//   },
//   removeClass: function (selector, className) {
//     document.querySelectorAll(selector).forEach(function (el) {
//       el.classList.removeClass(className);
//     });
//   }
// }

var tabContainer = ".tab-containers";
var tabList = ".tabs-list";
var options = ".options"

$(tabList + " li").on("click", function (e) {
  e.preventDefault();
  navigateTab(e.target.hash);
})

function navigateTab(selector) {
  $(tabList + " li").removeClass("active");
  $("a[href='"+selector+"']").closest("li").addClass("active");
  $(tabContainer).find('.tab-content').removeClass("active");
  $(tabContainer).find(selector).addClass("active fadeIn animated");
}

$(options+" .option").on("click", function (e) {
  $(tabContainer + " .tab-content.active").find(".option").removeClass("active");
  $(this).addClass("active");
})

$(".tab-content button.next").on("click", function (e) {
  var containerSelector = $(this).data("href")
  navigateTab(containerSelector);
})

$(".signup .step1 button.next").on("click", function (e) {
  $(this).html('<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>');
  axios.get('https://person-stream.clearbit.com/v2/combined/find?email=Reece_Cullen@spring.com').then(function (resp) {
    loadSecondForm(resp.data);
  });
})

function loadSecondForm(data) {
  var form = $(".signup .step2");
  var email = (data && data.person && data.person.email) ? data.person.email : '';
  var name = (data && data.person && data.person.name && data.person.name.fullName) ? data.person.name.fullName : '';
  var company = (data && data.company && data.company.name) ? data.company.name : '';
  var website = (data && data.company && data.company.domain) ? data.company.domain : '';

  form.find("[name='email']").val(email);
  form.find("[name='name']").val(name);
  form.find("[name='company']").val(company);
  form.find("[name='website']").val(website);

  $(".signup .step1").addClass("hidden");
  $(".signup .step2").removeClass("hidden");
}