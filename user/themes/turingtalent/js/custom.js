axios.defaults.headers.common = {
  "Authorization": "Bearer sk_087804f26c8aac10230bed129295c2ec",
};

axios.get('https://person-stream.clearbit.com/v2/combined/find?email=Reece_Cullen@spring.com').then(function (resp) {
  console.log("resp", resp);
});