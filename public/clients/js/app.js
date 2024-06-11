
function formatCurrencyVND(value) {
    return value.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
}
document.addEventListener('DOMContentLoaded', function () {
    axios.get('http://127.0.0.1:8000/api/saleProduct')
        .then(response => {
            let saleProducts = response.data;
            let saleProductsContainer = document.getElementById('sale-products');

            saleProducts.forEach(product => {
                let productElement = document.createElement('a');
                productElement.href = `http://127.0.0.1:8000/productdetail/${product.id}`;
                productElement.classList.add('text-decoration-none', 'card', 'mb-3');
                productElement.style.border = '1px solid rgb(234, 234, 234)';

                let imageUrl = product.images.length > 0 ? product.images[0].url : 'https://via.placeholder.com/640x480.png?text=No+Image';

                productElement.innerHTML = `
                    <span style="top: 5%; left: 5%" class="position-absolute text-bg-danger badge rounded-1 p-2">Sale</span>
                    <div class="row g-0">
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <img src="${imageUrl}" class="w-75 p-2" style="height: 100px; object-fit: cover;" alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis" class="card-title">${product.ten}</h5>
                                <p class="card-text my-2">
                                    <i class="fa-solid fa-star" style="color: #eaea14" aria-hidden="true"></i>
                                    <i class="fa-solid fa-star" style="color: #eaea14" aria-hidden="true"></i>
                                    <i class="fa-solid fa-star" style="color: #eaea14" aria-hidden="true"></i>
                                    <i class="fa-solid fa-star" style="color: #eaea14" aria-hidden="true"></i>
                                    <i class="fa-solid fa-star" style="color: #eaea14" aria-hidden="true"></i>
                                </p>
                                <span class="card-price fw-medium fs-5">${formatCurrencyVND(product.gia - product.giamgia)}</span>
                                &nbsp;
                                <del class="opacity-50 text-secondary">${formatCurrencyVND(product.gia)}</del>
                            </div>
                        </div>
                    </div>
                `;
                saleProductsContainer.appendChild(productElement);
            });
        })
        .catch(error => {
            console.error('There was an error!', error);
        });

    axios.get('http://127.0.0.1:8000/api/interestedProduct')
        .then(response => {
            let interestedProducts = response.data;
            let interestedProductsContainer = document.getElementById('interested-products');

            interestedProducts.forEach(product => {
                let productElement = document.createElement('a');
                productElement.href = `http://127.0.0.1:8000/productdetail/${product.id}`;
                productElement.classList.add('text-decoration-none', 'card', 'mb-3');
                productElement.style.border = '1px solid rgb(234, 234, 234)';

                let imageUrl = product.images.length > 0 ? product.images[0].url : 'https://via.placeholder.com/640x480.png?text=No+Image';

                productElement.innerHTML = `
                    <span style="top: 5%; left: 5%" class="position-absolute text-bg-danger badge rounded-1 p-2">Hot</span>
                    <div class="row g-0">
                        <div class="col-4 d-flex justify-content-center align-items-center">
                            <img src="${imageUrl}" class="w-75 p-2" style="height: 100px; object-fit: cover;" alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis" class="card-title">${product.ten}</h5>
                                <p class="card-text my-2">
                                    <i class="fa-solid fa-star" style="color: #eaea14" aria-hidden="true"></i>
                                    <i class="fa-solid fa-star" style="color: #eaea14" aria-hidden="true"></i>
                                    <i class="fa-solid fa-star" style="color: #eaea14" aria-hidden="true"></i>
                                    <i class="fa-solid fa-star" style="color: #eaea14" aria-hidden="true"></i>
                                    <i class="fa-solid fa-star" style="color: #eaea14" aria-hidden="true"></i>
                                </p>
                                <span class="card-price fw-medium fs-5">${formatCurrencyVND(product.gia - product.giamgia)}</span>
                                &nbsp;
                                <del class="opacity-50 text-secondary">${formatCurrencyVND(product.gia)}</del>
                            </div>
                        </div>
                    </div>
                `;
                interestedProductsContainer.appendChild(productElement);
            });
        })
        .catch(error => {
            console.error('There was an error!', error);
        });
});