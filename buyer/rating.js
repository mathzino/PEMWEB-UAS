const rating = document.querySelector("#rating");
const ratingValue = document.querySelector("#rating-value");
const incrementButton = document.querySelector("#incrementButton");
const decrementButton = document.querySelector("#decrementButton");

incrementButton.addEventListener("click", function () {
  ratingValue.value++;

  ratingValue.value > 5 ? (ratingValue.value = 5) : ratingValue.value;
  ratingValue.value < 0 ? (ratingValue.value = 0) : ratingValue.value;
  let i = 1;
  let limit = ratingValue.value > 5 ? 5 : ratingValue.value;
  let element = ``;
  for (i = 1; i <= limit; i++) {
    element += `<svg width="16" height="16" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M9.08104 2.848L6.54204 2.479L5.40704 0.178004C5.37604 0.115004 5.32504 0.0640037 5.26204 0.0330037C5.10404 -0.0449963 4.91204 0.0200037 4.83304 0.178004L3.69804 2.479L1.15904 2.848C1.08904 2.858 1.02504 2.891 0.976038 2.941C0.9168 3.00189 0.884157 3.0838 0.885282 3.16875C0.886407 3.25369 0.921208 3.33471 0.982038 3.394L2.81904 5.185L2.38504 7.714C2.37486 7.77283 2.38137 7.83334 2.40383 7.88866C2.42629 7.94398 2.4638 7.99189 2.51211 8.02698C2.56041 8.06206 2.61759 8.08291 2.67714 8.08716C2.73669 8.0914 2.79624 8.07888 2.84904 8.051L5.12004 6.857L7.39104 8.051C7.45304 8.084 7.52504 8.095 7.59404 8.083C7.76804 8.053 7.88504 7.888 7.85504 7.714L7.42104 5.185L9.25804 3.394C9.30804 3.345 9.34104 3.281 9.35104 3.211C9.37804 3.036 9.25604 2.874 9.08104 2.848Z" fill="#FFD600"></path>
  </svg>`;
  }
  rating.innerHTML = element;
});

decrementButton.addEventListener("click", function () {
  ratingValue.value--;
  ratingValue.value > 5 ? (ratingValue.value = 5) : ratingValue.value;
  ratingValue.value < 0 ? (ratingValue.value = 0) : ratingValue.value;
  let i = 1;
  let limit = ratingValue.value > 5 ? 5 : ratingValue.value;
  let element = ``;
  for (i = 1; i <= limit; i++) {
    element += `<svg width="16" height="16" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M9.08104 2.848L6.54204 2.479L5.40704 0.178004C5.37604 0.115004 5.32504 0.0640037 5.26204 0.0330037C5.10404 -0.0449963 4.91204 0.0200037 4.83304 0.178004L3.69804 2.479L1.15904 2.848C1.08904 2.858 1.02504 2.891 0.976038 2.941C0.9168 3.00189 0.884157 3.0838 0.885282 3.16875C0.886407 3.25369 0.921208 3.33471 0.982038 3.394L2.81904 5.185L2.38504 7.714C2.37486 7.77283 2.38137 7.83334 2.40383 7.88866C2.42629 7.94398 2.4638 7.99189 2.51211 8.02698C2.56041 8.06206 2.61759 8.08291 2.67714 8.08716C2.73669 8.0914 2.79624 8.07888 2.84904 8.051L5.12004 6.857L7.39104 8.051C7.45304 8.084 7.52504 8.095 7.59404 8.083C7.76804 8.053 7.88504 7.888 7.85504 7.714L7.42104 5.185L9.25804 3.394C9.30804 3.345 9.34104 3.281 9.35104 3.211C9.37804 3.036 9.25604 2.874 9.08104 2.848Z" fill="#FFD600"></path>
  </svg>`;
  }
  rating.innerHTML = element;
});

ratingValue.addEventListener("change", function () {
  ratingValue.value > 5 ? (ratingValue.value = 5) : ratingValue.value;
  ratingValue.value < 0 ? (ratingValue.value = 0) : ratingValue.value;
  let i = 1;
  let limit = ratingValue.value > 5 ? 5 : ratingValue.value;
  let element = ``;
  for (i = 1; i <= limit; i++) {
    element += `<svg width="16" height="16" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M9.08104 2.848L6.54204 2.479L5.40704 0.178004C5.37604 0.115004 5.32504 0.0640037 5.26204 0.0330037C5.10404 -0.0449963 4.91204 0.0200037 4.83304 0.178004L3.69804 2.479L1.15904 2.848C1.08904 2.858 1.02504 2.891 0.976038 2.941C0.9168 3.00189 0.884157 3.0838 0.885282 3.16875C0.886407 3.25369 0.921208 3.33471 0.982038 3.394L2.81904 5.185L2.38504 7.714C2.37486 7.77283 2.38137 7.83334 2.40383 7.88866C2.42629 7.94398 2.4638 7.99189 2.51211 8.02698C2.56041 8.06206 2.61759 8.08291 2.67714 8.08716C2.73669 8.0914 2.79624 8.07888 2.84904 8.051L5.12004 6.857L7.39104 8.051C7.45304 8.084 7.52504 8.095 7.59404 8.083C7.76804 8.053 7.88504 7.888 7.85504 7.714L7.42104 5.185L9.25804 3.394C9.30804 3.345 9.34104 3.281 9.35104 3.211C9.37804 3.036 9.25604 2.874 9.08104 2.848Z" fill="#FFD600"></path>
  </svg>`;
  }
  rating.innerHTML = element;
});
