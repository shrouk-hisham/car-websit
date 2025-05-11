fetch('get_cars.php')
  .then(response => response.json())
  .then(data => {
    const container = document.querySelector('.products__container');
    container.innerHTML = ''; // clear old content

    data.forEach(car => {
      container.innerHTML += `
        <div class="popular__item">
            <div class="product__banner">
                <img src="${car.image}" class="product__img default">
            </div>
            <div class="product__content">
                <h4>${car.name}</h4>
                <p>${car.description}</p>
                <div class="product__price flex">
                    <div class="price">
                        <h3>$${car.price}</h3>
                        <p>$${car.old_price}</p>
                    </div>
                </div>
            </div>
        </div>
      `;
    });
  });