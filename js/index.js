const cars = document.getElementById('cars');
const models = document.getElementById('models');

//OBJETO DE MODELOS
const carModels = {
  kia: ['CRV', 'HRV', 'SOUL'],
  ford: ['MUSTANG', 'ESCAPE', 'FIESTA'],
  nissan: ['VERSA', 'MARCH', 'SENTRA']
}


cars.addEventListener('change', () => {
  models.innerHTML = '';
  const selectedCar = cars.value;
//SELECCIONADOR DEPENDE DEL QUE ELIJA EL USUARIO DESDE EL FRONTEND

  if(!selectedCar) {
    return;
  }

  //ITERADOR DEL OBJETO MODELOS POR MARCA
  carModels[selectedCar].forEach(model => {
    const option = document.createElement('option');
    option.value = model;
    option.textContent = model;
    models.appendChild(option);
  });
});