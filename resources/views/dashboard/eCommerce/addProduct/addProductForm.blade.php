<div class="grid grid-cols-12 md:gap-x-[3rem] gap-0">
    <div class="xxl:col-span-6 xl:col-span-12 lg:col-span-12 md:col-span-6 col-span-12">
        <div class="box !shadow-none mb-0 !border-0">
            <div class="box-body !p-0">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-12 gap-4">
                        <div class="xl:col-span-12 col-span-12">
                            <label class="mb-2.5 block font-bold" for="product_name">Product Name</label>
                            <input type="text" id="product_name" name="product_name" class="w-full border border-[rgba(77,71,55,0.50)] rounded-lg p-2 placeholder:opacity-70 bg-[#25292C]" placeholder="product name" required>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <label class="mb-2.5 block font-bold" for="product_title">Product Title</label>
                            <input type="text" id="product_title" name="product_title" class="w-full border border-[rgba(77,71,55,0.50)] rounded-lg p-2 placeholder:opacity-70 bg-[#25292C]" placeholder="product title" required>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <label class="mb-2.5 block font-bold" for="product_price">Price</label>
                            <input type="text" id="product_price" name="product_price" class="w-full border border-[rgba(77,71,55,0.50)] rounded-lg p-2 placeholder:opacity-70 bg-[#25292C]" placeholder="product price" required>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <label class="mb-2.5 block font-bold" for="product_details">Details</label>
                            <input type="text" id="product_details" name="product_details[]" class="details-input mb-2 w-full border border-[rgba(77,71,55,0.50)] rounded-lg p-2 placeholder:opacity-70 bg-[#25292C]" placeholder="product details" required>
                            <div id="additional-details"></div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <button type="button" id="add-details-btn" class="bg-[#F47500] p-2 text-white dropdown-toggle">Add Details</button>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <label class="mb-2.5 block font-bold" for="product_category">Category</label>
                            <select id="product_category" name="product_category" class="w-full border border-[rgba(77,71,55,0.50)] rounded-lg p-2 placeholder:opacity-70 bg-[#25292C]" required>
                                <option value="" disabled selected>Select category</option>
                                <option value="bread">Bread</option>
                                <option value="appetizer">Appetizer</option>
                                <option value="breakfast">Breakfast</option>
                                <option value="main dish">Main Dish</option>
                                <option value="healthy">Healthy</option>
                                <option value="vegetarian">Vegetarian</option>
                                <option value="instant pot">Instant Pot</option>
                                <option value="dessert">Dessert</option>
                            </select>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <label class="mb-2.5 block font-bold" for="product_image">Product Image</label>
                            <input type="file" id="product_image" name="product_images[]" class="image-input mb-2 w-full border border-[rgba(77,71,55,0.50)] rounded-lg p-2 placeholder:opacity-70 bg-[#25292C]" accept="image/*">
                            <div id="additional-images"></div>
                        </div>
                        <div class="xl:col-span-12 col-span-12">
                            <button type="button" id="add-image-btn" class="bg-[#F47500] p-2 text-white dropdown-toggle">Add Image</button>
                        </div>
                    </div>
                    <button type="submit" class="bg-[#F47500] p-2 my-10 text-white dropdown-toggle">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="px-6 py-4 border-t border-dashed  sm:flex justify-end">
    <button class="ti-btn ti-btn-primary !font-[500] m-1">Add Product<i class="bi bi-plus-lg ms-2"></i></button>
    <button class="ti-btn ti-btn-success !font-[500] m-1">Save Product<i class="bi bi-download ms-2"></i></button>
</div>

<script>
    document.getElementById('add-details-btn').addEventListener('click', function() {
        const additionalDetails = document.getElementById('additional-details');
        const currentDetailsCount = additionalDetails.getElementsByTagName('input').length;
        if (currentDetailsCount < 2) {
            const newDetailInput = document.createElement('input');
            newDetailInput.type = 'text';
            newDetailInput.name = 'product_details[]';
            newDetailInput.className = 'details-input mb-2 w-full border border-[rgba(77,71,55,0.50)] rounded-lg p-2 placeholder:opacity-70 bg-[#25292C]';
            newDetailInput.placeholder = 'product details';
            newDetailInput.required = true;
            additionalDetails.appendChild(newDetailInput);
        } else {
            alert('You can only add up to 3 Details.');
        }
    });

    document.getElementById('add-image-btn').addEventListener('click', function() {
        const additionalImages = document.getElementById('additional-images');
        const currentImageCount = additionalImages.getElementsByTagName('input').length;
        if (currentImageCount < 2) { // Allow only up to 3 image inputs in total
            const newImageInput = document.createElement('input');
            newImageInput.type = 'file';
            newImageInput.name = 'product_images[]';
            newImageInput.className = 'image-input mb-2 w-full border border-[rgba(77,71,55,0.50)] rounded-lg p-2 placeholder:opacity-70 bg-[#25292C]';
            newImageInput.accept = 'image/*';
            additionalImages.appendChild(newImageInput);
        } else {
            alert('You can only add up to 3 images.');
        }
    });
</script>