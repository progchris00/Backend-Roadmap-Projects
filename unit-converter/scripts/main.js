const lengthConversion = document.getElementById("length-conversion");
const weightConversion = document.getElementById("weight-conversion");
const temperatureConversion = document.getElementById("temperature-conversion");

const unitOptions = {
  length: [
    "millimeter",
    "centimeter",
    "meter",
    "kilometer",
    "inch",
    "foot",
    "yard",
    "mile",
  ],
  weight: ["milligram", "gram", "kilogram", "ounce", "pound"],
  temperature: ["celsius", "fahrenheit", "kelvin"],
};

let currentConversionWindow = "length";

lengthConversion.addEventListener("click", () => renderUnitOptions("length"));
weightConversion.addEventListener("click", () => renderUnitOptions("weight"));
temperatureConversion.addEventListener("click", () =>
  renderUnitOptions("temperature")
);

function renderUnitOptions(unit) {
  currentConversionWindow = unit;
  const startUnitMenu = document.getElementById("convert-unit-from");
  const endUnitMenu = document.getElementById("convert-unit-to");

  startUnitMenu.innerHTML = "";
  endUnitMenu.innerHTML = "";

  const startFragment = document.createDocumentFragment();
  const endFragment = document.createDocumentFragment();

  const option = unitOptions[unit];

  option.forEach((unit) => {
    const startUnitOption = document.createElement("option");
    startUnitOption.setAttribute("value", unit);
    startUnitOption.textContent = unit;
    startFragment.appendChild(startUnitOption);

    const endUnitOption = document.createElement("option");
    endUnitOption.setAttribute("value", unit);
    endUnitOption.textContent = unit;
    endFragment.appendChild(endUnitOption);
  });

  startUnitMenu.appendChild(startFragment);
  endUnitMenu.appendChild(endFragment);
  applyActiveClass();
}

function applyActiveClass() {
  const conversionButton = document.querySelectorAll(".conversion-button");

  conversionButton.forEach((button) => {
    button.classList.remove("active-button");
  });

  const activeButton = document.getElementById(
    `${currentConversionWindow}-conversion`
  );
  activeButton.classList.add("active-button");
}

renderUnitOptions(currentConversionWindow);
