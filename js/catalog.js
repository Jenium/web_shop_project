// Catalog - будет заниматься задачами управления
// Product - будет отрисовывать карточку товара в каталог

class Catalog {
    constructor() {
        this.$catalog = document.querySelector('.catalog');
        this.$catalogList = this.$catalog.querySelector('.catalog-list');
        this.$pagination = this.$catalog.querySelector('.catalog-pagination');
        this.products = [];
        this.$loader = this.$catalog.querySelector('.loader');
        // this.categoryId = this.$catalog.getAttribute('data-category-id');
        this.categoryId = this.$catalog.dataset.categoryId;
    }

    load(active = 1) {
        // будет загружать данные по ajax
        // После загрузки будет вызывать метод render

        this.removeCatalogData();

        this.showLoader();

        const xhr = new XMLHttpRequest;
        xhr.open('GET', `/handlers/handler_catalog.php?category_id=${this.categoryId}&page=${active}`);
        xhr.send();

        xhr.addEventListener('load', () => {
            const response = JSON.parse(xhr.response);
            
            // console.log(response);
            
            response.products.forEach((item) => {
                this.products.push(
                    new Product(
                        item.id, 
                        item.img_url, 
                        item.name, 
                        item.description, 
                        item.price
                    )
                );
            });
            
            this.render();
            this.renderPaginnation(response.pagination);
        });
    }

    showLoader() {
        this.$loader.classList.add('show');
    }

    hideLoader() {
        this.$loader.classList.remove('show');
    }

    removeCatalogData() {
        /*
        * методы очистки элементов
        * 
        * числовая переменная count = 0;
        * строковая переменная text = '';
        * переменная с массивом arr = [];
        * 
        */

        this.$catalogList.innerHTML = '';
        this.$pagination.innerHTML = '';
        this.products = [];
    }

    renderPaginnation(pagination) {

        for (let i = 1; i <= pagination.count; i++) {
            let $paginationItem = document.createElement('div');
            $paginationItem.classList.add('catalog-pagination-item');
            $paginationItem.innerHTML = i;
            $paginationItem.dataset.page = i;
            
            // Добавляем класс active
            if (i === pagination.active) {
                $paginationItem.classList.add('_active');
            }
            
            this.$pagination.append($paginationItem);
            
            $paginationItem.addEventListener('click', (e) => {
                // Получили элемент по которому кликнули
                const target = e.target;

                // Удаляем класс active у всех элементов пагинации
                this.$pagination.querySelectorAll('.catalog-pagination-item').forEach(item => {
                    item.classList.remove('_active');
                });

                // Добавляем класс active активному элементу пагинации
                target.classList.add('_active');
                
                // Вызываем загрузку каталога
                this.load(target.dataset.page);
            });
        }
    }

    render() {
        // Отрисовывает карточку товара

        this.products.forEach((item) => {
            this.$catalogList.append(item.getElement());
        });

        this.hideLoader();
    }

};

class Product {
    constructor(id, img_url, name, description, price) {
        this.id = id;
        this.img_url = img_url;
        this.name = name;
        this.description = description;
        this.price = price;
    }

    getElement() {
        let $catalogItem = document.createElement('a');
        $catalogItem.href = `/product.php?id=${this.id}`;
        $catalogItem.classList.add('catalog-item');
        $catalogItem.innerHTML = `
            <div class="catalog-item__img" style="background-image: url('${this.img_url}');"></div>
            <div class="catalog-item__name">${this.name}</div>
            <div class="catalog-item__price">${this.price} руб.</div>
        `;

        return $catalogItem;

    };
};

const catalog = new Catalog();

// вызываем загрузку данных
catalog.load();