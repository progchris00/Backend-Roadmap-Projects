let currentUnitMeasure = "length";

const units = {
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

const convertLength = document.getElementById("convert-length");
const convertWeight = document.getElementById("convert-weight");
const convertTemperature = document.getElementById("convert-temperature");

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

function applyActiveClass() {
  const activeButton = document.getElementById(`convert-${currentUnitMeasure}`);
  activeButton.classList.add("active-button");
}

function renderOptions(currentUnitMeasure) {
  const convertUnitFrom = document.getElementById("convert_unit_from");
  const convertUnitTo = document.getElementById("convert_unit_to");

  for (let index = 0; index < units[currentUnitMeasure].length; index++) {
    const optionChild = document.createElement("option");
    optionChild.setAttribute("value", units[currentUnitMeasure][index]);
    optionChild.textContent = units[currentUnitMeasure][index];
    convertUnitFrom.appendChild(optionChild);
  }

  for (let index = 0; index < units[currentUnitMeasure].length; index++) {
    const optionChild = document.createElement("option");
    optionChild.setAttribute("value", units[currentUnitMeasure][index]);
    optionChild.textContent = units[currentUnitMeasure][index];
    convertUnitTo.appendChild(optionChild);
  }
}

applyActiveClass();
renderOptions(currentUnitMeasure);
