(function () {
  'use strict';

  var intercom_app_id = 'o2cau4z3';

  function reinitIntercom(email, name, company, website) {
    var user = {
      email: email,
      name: name,
      company: company,
      website: website
    };
    
    localStorage.setItem("intercom_user", JSON.stringify(user));
    user.app_id = intercom_app_id;
    window.Intercom('update', user);
  }
  
  function initIntercom() {
    var user = localStorage.getItem("intercom_user");
    if (user) {
      user = JSON.parse(user);
      user.app_id = intercom_app_id;
      window.Intercom('boot', user);
    } else {
      window.Intercom('boot', { app_id: intercom_app_id });
    } 
  }

  window.reinitIntercom = reinitIntercom;
  window.initIntercom = initIntercom;

  initIntercom();
})();