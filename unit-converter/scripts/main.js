const convertLength = document.getElementById("convert-length");
const convertWeight = document.getElementById("convert-weight");
const convertTemperature = document.getElementById("convert-temperature");

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

convertLength.addEventListener("click", () => {
  currentUnitMeasure = "length";
  applyActiveClass();
  renderOptions(currentUnitMeasure);
});
convertWeight.addEventListener("click", () => {
  currentUnitMeasure = "weight";
  applyActiveClass();
  renderOptions(currentUnitMeasure);
});
convertTemperature.addEventListener("click", () => {
  currentUnitMeasure = "temperature";
  applyActiveClass();
  renderOptions(currentUnitMeasure);
});

function renderUnitOptions(currentConversionWindow) {
  const startUnitMenu = document.getElementById("convert-unit-from");
  const endUnitMenu = document.getElementById("convert-unit-to");

  startUnitMenu.innerHTML = "";
  endUnitMenu.innerHTML = "";

  const startFragment = document.createDocumentFragment();
  const endFragment = document.createDocumentFragment();

  const option = unitOptions[currentConversionWindow];

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
}

function applyActiveClass() {
  const activeButton = document.getElementById(`convert-${currentUnitMeasure}`);
  activeButton.classList.add("active-button");
}

renderUnitOptions(currentConversionWindow);
