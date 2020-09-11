// Add Elements Dinamically To The Manu Form

const form = document.querySelector('#addMenuItemsForm');
const buttonAdd = document.querySelector('#buttonAdd');
const buttonRemove = document.querySelector('#buttonRemove');
const currentItems = Array.from(document.querySelectorAll('#addMenuItemsForm > div'));
let categories = [];

buttonAdd.addEventListener('click', addItem);
buttonRemove.addEventListener('click', removeItem);

let count = currentItems.length;

function addItem() {
    getCateriesOptions();
    count = count + 1;

    let html = `
    <div class="form-row bg-light mb-3 p-4 dish-items">
        <div class="form-group m-0 col-lg-3 col-md-6 col-sm-6">
            <label for="dishName2">Dish Name: <span class="badge badge-primary"></span></label>
            <input type="text" name="dishName[]" class="form-control" id="dishName${count}" value="" placeholder="Dish Name">
        </div>
        <div class="form-group m-0 col-lg-3 col-md-6 col-sm-6">
            <label for="dishPrice2">Dish Price</label>
            <input type="text" name="dishPrice[]" class="form-control" id="dishPrice${count}" value="" placeholder="Dish Price">
        </div>
        <div class="form-group m-0 col-lg-3 col-md-6 col-sm-6">
            <label for="dishIngredients2">Dish Ingredients</label>
            <input type="text" name="dishIngredients[]" class="form-control" id="dishIngredients${count}" value="" placeholder="Dish Ingredients">
        </div>
        <div class="form-group m-0 col-lg-3 col-md-6 col-sm-6">
            <label for="dishType2">Dish Type</label>
            <select name="dishType[]" class="form-control" id="dishType${count}">
                ${(()=> {
                    let html = ""
                    if(categories.length > 0) {
                        html = `<option selected disabled hidden>Please Select A Category</option>` 
                        for (let count = 0; count < categories.length; count++) {
                            html += `<option value="${categories[count]}">${categories[count]}</option>`;
                            
                        }
                        return html 
                    } else {
                        return html = `<option selected disabled value="null">There are no categories yet</option>`
                    }
                })()}
            </select>
        </div>
    </div>
`
    form.innerHTML += html;
}

function removeItem() {
    if(count > 1) {
        form.removeChild(form.lastElementChild);
        count--;
    }
}

function getCateriesOptions() {
    if(categories.length > 0) {
        return;
    }

    let itemCategories = document.querySelector('#dishType1');
    for (let count = 0; count < itemCategories.options.length; count++) {

        if(count === 0) {
            continue;
        }

        categories.push(itemCategories.options[count].text);
    }
}

// Delete Elements from Update Form

const categoriesForm = document.querySelector('#menuCategories');

categoriesForm.addEventListener('click', deleteMenuCategory);

function deleteMenuCategory(event) {
    event.preventDefault();

    if(event.target.classList.contains("delete")) {
        let item = event.target.closest('.categoryItem');
        item.remove();
    }
}

// Categories and Dish items add and remove categories

const buttonAddCategory = document.querySelector('#buttonAddCategory');
const buttonRemoveCategory = document.querySelector('#buttonRemoveCategory');
const categoryItemsContainer = document.querySelector("#categoryItems");
const currentCategoryItems = Array.from(document.querySelectorAll('#categoryItems > div'));
let categoryItemsCount = currentCategoryItems.length;

buttonAddCategory.addEventListener('click', addCategory);
buttonRemoveCategory.addEventListener('click', removeCategory);

function addCategory() {
    categoryItemsCount = categoryItemsCount + 1;

    let html=`
        <div class="form-group m-1">
            <label for="category${categoryItemsCount}">Category ${categoryItemsCount}</label>
            <input type="text" name="category[]" class="form-control" id="category${categoryItemsCount}" placeholder="Category">
        </div>
    `;

    console.log(categoryItemsContainer);
    categoryItemsContainer.innerHTML += html;
}

function removeCategory() {
    if(categoryItemsCount > 1) {
        categoryItemsContainer.removeChild(categoryItemsContainer.lastElementChild);
        categoryItemsCount--;
    }
}





