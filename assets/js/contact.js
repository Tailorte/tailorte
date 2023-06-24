// var baseUrl = "http://localhost:8080/api/v1";
var baseUrl = "https://prod.tailorte.com/api/v1";

async function makeRequest(url, method, body) {
  return fetch(`${baseUrl}/${url}`, {
    method,
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json",
    },
    body: body ? JSON.stringify(body) : null,
  })
    .then((res) => res.json())
    .then((response) => response);
}

async function getBrandLogo() {
  const response = await makeRequest("general/random-brand-logo", "GET", null);
  console.log(response);
}

async function getBenefits() {
  const callRequest = async () => {
    const response = await this.makeRequest(
      "general/subscriptions",
      "GET",
      null
    );
    const oneHourFromNow = Date.now() + 60 * 60 * 1000;
    localStorage.setItem(
      btoa("subscription-data"),
      btoa(JSON.stringify({ subscription: response, ttl: oneHourFromNow }))
    );
    return response;
  };

  let subscriptions = {};
  const subData = localStorage.getItem(btoa("subscription-data"));

  if (subData) {
    subscriptions = JSON.parse(atob(subData))?.subscription;
    if (subscriptions.ttl < Date.now()) {
      subscriptions = await callRequest();
    }
  } else {
    subscriptions = await callRequest();
  }

  const pricingBodyTable = document.getElementById("pricingBody");  
  if (pricingBodyTable) {
    const setPricing = (item) => {
      const freePricing = document.getElementById("free-pricing");
      const regularPricing = document.getElementById("regular-pricing");
      const premiumPricing = document.getElementById("premium-pricing");
  
      freePricing.innerHTML = `<b>${item.free}/mo</b>`;
      regularPricing.innerHTML = `<b>${item.regular}/mo</b>`;
      premiumPricing.innerHTML = `<b>${item.premium}/mo</b>`;
    }
  
    for(let item of subscriptions) {
        if (item.benefit == "Pricing") {
          setPricing(item);
          continue;
        }
        const tr = document.createElement("tr");
        const th = document.createElement("th");
        const tdFree = document.createElement("td")
        const tdRegular = document.createElement("td")
        const tdPremium = document.createElement("td")
      
        th.setAttribute('scope', "row")
        th.setAttribute('class', "table-active text-left")
        th.textContent = item.benefit
        tdFree.innerHTML = `<p>${item.free ?? '-'}</p>`
        tdRegular.innerHTML = `<p>${item.regular ??  '-'}</p>`
        tdPremium.innerHTML = `<p>${item.premium ?? '-'}</p>`
  
        tr.appendChild(th)
        tr.appendChild(tdFree)
        tr.appendChild(tdRegular)
        tr.appendChild(tdPremium)
  
        pricingBodyTable.appendChild(tr)
    }
  }
}

async function onSubmit(event) {
  event.preventDefault();
  let subject = document.getElementById("subject");
  let email = document.getElementById("email");
  let name = document.getElementById("name");
  let phone_number = document.getElementById("phone_number");
  let message = document.getElementById("message");
  let success = document.getElementById("success-msg");
  let failed = document.getElementById("failed-msg");

  failed.classList.add("hide");

  const data = {
    subject: subject.value,
    email: email.value,
    name: name.value,
    phone_number: phone_number.value,
    message: message.value,
  };

  const response = await fetch(`${baseUrl}/general/contact-us`, {
    method: "POST",
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  })
    .then((res) => res.json())
    .then((response) => response);

  console.log("We got response", response);

  if (response.code == "00") {
    success.classList.remove("hide");
    subject.value = "";
    email.value = "";
    name.value = "";
    phone_number.value = "";
    message.value = "";

    setTimeout(() => {
      success.classList.add("hide");
    }, 10000);
  } else {
    failed.innerHTML = "Please fill all fields correctly";
    failed.classList.remove("hide");
  }
}

var form = document.getElementById("contact-form");
if (form) {
  form.addEventListener("submit", onSubmit, true);
}

this.getBenefits();
// async function onSubmit(e){e.preventDefault();let t=document.getElementById("subject"),l=document.getElementById("email"),a=document.getElementById("name"),n=document.getElementById("phone_number"),s=document.getElementById("message"),o=document.getElementById("success-msg"),i=document.getElementById("failed-msg");i.classList.add("hide");let m={subject:t.value,email:l.value,name:a.value,phone_number:n.value,message:s.value};console.log(m);let d=await fetch("http://localhost:8080/api/v1/general/contact-us",{method:"POST",headers:{Accept:"application/json","Content-Type":"application/json"},body:JSON.stringify(m)}).then(e=>e.json()).then(e=>e);console.log("We got response",d),"00"==d.code?(o.classList.remove("hide"),t.value="",l.value="",a.value="",n.value="",s.value="",setTimeout(()=>{o.classList.add("hide")},1e4)):(i.innerHTML="Please fill all fields correctly",i.classList.remove("hide"))}var form=document.getElementById("contact-form");form.addEventListener("submit",onSubmit,!0);``
