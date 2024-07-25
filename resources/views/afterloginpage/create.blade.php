<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.header')
  <style>
    .custom-file-label::after {
      content: "Choose file";
    }
     label{
      font-size: 25px;
      color:cadetblue;
     }
    .photo-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 400px;
      /* Adjust as needed */
      overflow: hidden;
      cursor: pointer;
    }

    #photoPreview {
      max-width: 400px;
      /* Adjust the size as needed */
      cursor: pointer;
    }

    .custom-file-input {
      display: none;
    }

    .recipe-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .recipe-title {
      font-style: italic;
      font-size: 30px;
      margin-bottom: 20px;
    }

    .ingredient-header,
    .direction-header {
      border: 1px solid #ced4da;
      padding: 10px;
      border-radius: 4px;
      margin-bottom: 10px;
      background-color: #e9ecef;
    }

    .ingredient-item,
    .direction-item {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .ingredient-item input,
    .direction-item textarea {
      flex: 1;
    }

    .ingredient-item button,
    .direction-item button {
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <div class="container-xxl bg-white p-0">
    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
      @include('layouts.navbar')
      <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
          <h1 class="display-3 text-white mb-3 animated slideInDown">Add Recipe</h1>

        </div>
      </div>
    </div>
    <!-- Navbar & Hero end -->
    <div class="container recipe-container mt-5">
      <h1 class=" text-center recipe-title ">Submit Your Recipe</h1>
      <form>
        @csrf
        <div class="form-group mb-4">
          <label for="recipeTitle">Recipe Title</label>
          <input type="text" class="form-control mt-3" id="recipeTitle" placeholder="Give your recipe a title">
        </div>
        <div class="form-group mb-4">
          <label for="recipeDescription">Description</label>
          <textarea class="form-control mt-3" id="recipeDescription" rows="5" placeholder="Describe your recipe."></textarea>
        </div>
        <div class="container text-center mb-4">
          <div class="form-group">
            <label>Photo </label>
          </div>
          <div class="mt-3 photo-container" id="photoContainer">
            <img id="photoPreview" src="img/upload.png" alt="Photo Preview">
            <input type="file" class="custom-file-input" id="recipePhoto">
          </div>
          <small class="form-text text-center">Use JPEG or PNG. Must be at least 960 x 960. Max file size: 30MB.</small>
        </div>

        <!-- Ingredients Section -->
        <div class="form-group">
          <label>Ingredients</label>
          <p>Enter one ingredient per line. Include the quantity (i.e. cups, tablespoons) and any special preparation (i.e. sifted, softened, chopped). Use optional headers to organize the different parts of the recipe (i.e. Cake, Frosting, Dressing).</p>
          <p>Enter ingredients below.</p>
          <div id="ingredientsList">
            <!-- Ingredients will be added here dynamically -->
          </div>
          <button type="button" class="btn btn-secondary mb-4" onclick="addIngredient()">+ Add Ingredient</button>
          <button type="button" class="btn btn-secondary mb-4" onclick="addIngredientHeader()">+ Add Header</button>
        </div>

        <!-- Directions Section -->
        <div class="form-group">
          <label>Instruction</label>
          <p>Explain how to make your recipe, including oven temperatures, baking or cooking times, and pan sizes, etc. Use optional headers to organize the different parts of the recipe (i.e. Prep, Bake, Decorate).</p>
          <p>Enter directions below.</p>
          <div id="directionsList">
            <!-- Directions will be added here dynamically -->
          </div>
          <button type="button" class="btn btn-secondary mb-4" onclick="addStep()">+ Add Step</button>
          <button type="button" class="btn btn-secondary mb-4" onclick="addStepHeader()">+ Add Header</button>
        </div>
        <!-- Nutrients Section -->
        <div class="form-group">
          <label>Nutrients</label>
          <p>Enter nutrients per serving. Use optional headers to organize the nutrients (i.e. Vitamins, Minerals).</p>
          <p>Enter nutrients below.</p>
          <div id="nutrientsList">
            <!-- Nutrients will be added here dynamically -->
          </div>
          <button type="button" class="btn btn-secondary mb-4" onclick="addNutrient()">+ Add Nutrient</button>
        </div>

        <!-- Servings, Yield, and Time Section -->
        <div class="form-group">
          <label for="servings">Servings</label>
          <input type="number" class="form-control mt-2" id="servings" placeholder="4">
        </div>
        <div class="form-group mt-4">
          <label>Prep Time</label>
          <div class="d-flex mt-2 mb-3">
            <input type="number" class="form-control mr-2" id="prepTime" placeholder="0">
            <select class="form-control">
              <option>mins</option>
              <option>hours</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="mb-3">Cook Time</label>
          <div class="d-flex">
            <input type="number" class="form-control mr-2 " id="cookTime" placeholder="0">
            <select class="form-control">
              <option>mins</option>
              <option>hours</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-4" >Submit Recipe</button>
        
      </form>
    </div>
    @include('layouts.footer')
  </div>

  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
    });

    function addIngredient() {
      var ingredientItem = document.createElement('div');
      ingredientItem.className = 'ingredient-item';
      ingredientItem.innerHTML = `
        <input type="text" class="form-control" placeholder="Add another ingredient">
        <button type="button" class="btn btn-danger" onclick="removeItem(this)">x</button>
      `;
      document.getElementById('ingredientsList').appendChild(ingredientItem);
    }

    function addIngredientHeader() {
      var headerItem = document.createElement('div');
      headerItem.className = 'ingredient-header';
      headerItem.innerHTML = `
        <input type="text" class="form-control" placeholder="Add a header, e.g. Cake">
        <button type="button" class="btn btn-danger" onclick="removeItem(this)">x</button>
      `;
      document.getElementById('ingredientsList').appendChild(headerItem);
    }

    function addStep() {
      var stepItem = document.createElement('div');
      stepItem.className = 'direction-item';
      stepItem.innerHTML = `
        <textarea class="form-control" rows="2" placeholder="e.g. Preheat oven to 350 degrees F…"></textarea>
        <button type="button" class="btn btn-danger" onclick="removeItem(this)">x</button>
      `;
      document.getElementById('directionsList').appendChild(stepItem);
    }

    function addStepHeader() {
      var headerItem = document.createElement('div');
      headerItem.className = 'direction-header';
      headerItem.innerHTML = `
        <input type="text" class="form-control" placeholder="Add a header, e.g. Prep">
        <button type="button" class="btn btn-danger" onclick="removeItem(this)">x</button>
      `;
      document.getElementById('directionsList').appendChild(headerItem);
    }

    function addNutrient() {
      var nutrientItem = document.createElement('div');
      nutrientItem.className = 'nutrient-item';
      nutrientItem.innerHTML = `
        <input type="text" class="form-control" placeholder="Add nutrient, e.g. Vitamin C - 10mg">
        <button type="button" class="btn btn-danger" onclick="removeItem(this)">x</button>
      `;
      document.getElementById('nutrientsList').appendChild(nutrientItem);
    }



    function removeItem(button) {
      button.parentElement.remove();
    }
    document.getElementById('photoContainer').addEventListener('click', function() {
      document.getElementById('recipePhoto').click();
    });

    document.getElementById('recipePhoto').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const photoPreview = document.getElementById('photoPreview');
          photoPreview.src = e.target.result;
        };
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>

</html>