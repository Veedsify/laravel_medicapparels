
// Assuming you have jQuery for simplicity, you can adapt this to plain JavaScript if needed
$(document).ready(function () {
    // Event handler for category filter
    // Event handler for category filter
    $('.category-sort').on('click', function (e) {
        e.preventDefault()
        $(this).siblings('.category-sort').removeClass('active');
        const category = $(this).data('category_sort');
        $(this).toggleClass('active');
        updateFilters({ category: $(this).hasClass('active') ? category : "" });
    });

    // Event handler for color and size filters
    $('.swatch-color, .swatch-size').on('click', function (e) {
        e.preventDefault();
        if (e.target.tagName === "A") {
            const filterType = $(this).hasClass('swatch-color') ? 'color' : 'size';
            $(this).siblings(`.swatch-${filterType}`).removeClass('swatch_active');
            const value = $(this).data(filterType);
            $(this).toggleClass('swatch_active');
            updateFilters({ [filterType]: $(this).hasClass('swatch_active') ? value : "" });
        }
    });


    // Function to update filters and URL
    function updateFilters(filters) {
        let queryParams = new URLSearchParams(window.location.search);

        // Update or add filters to the URL
        for (let key in filters) {
            if (filters.hasOwnProperty(key)) {
                queryParams.set(key, filters[key]);
            }
        }

        // Replace the current URL with the updated one
        history.replaceState({}, '', window.location.pathname + '?' + queryParams.toString());
        // Now you can make an AJAX request to the backend to fetch filtered data
        // For simplicity, you can trigger a page reload to demonstrate the concept
        // location.reload();
        // window.location.reload();
    }

});

// Load sorted products to the container
function loadSortedProductsToContainer(sortedProducts) {
    let productContainer = document.querySelector(".product-grid-shop");

    setTimeout(() => {
        if (productContainer) {
            productContainer.innerHTML = "";
            if (sortedProducts.length == 0) {
                return productContainer.innerHTML = `
            <div class="col-12">
                <h3 class="text-center">No products found</h3>
            </div>
            `;
            }
            sortedProducts.forEach((product, index) => {
                loadShopProducts(productContainer, product, index);
            });
        }
    }, 1000);
}


$("#apply_filters").click(function (e) {
    window.location.reload();
})


var links = document.querySelectorAll(".product_query_link")

links.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault()
        const pathLink = link.href
        const params = new URLSearchParams(window.location.search);
        window.location.href = pathLink + "?" + params.toString()
    })
})
