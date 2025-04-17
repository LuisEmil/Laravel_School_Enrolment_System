<form method="POST" action="#">
    <div class="card">
        <h1 class="p-1">Make Announcement</h1>
        <div class="card-body p-1">
            <label for="title"> Announcement Title</label>
            <input type="text" name="title" id="title" class="w-full p-2 border rounded focus:border-primary-vivid focus:outline-none mb-4">
            <label for="description">Announcement Description</label>
            <textarea name="description" id="description" rows="4" class="w-full p-2 border rounded focus:border-primary-vivid focus:outline-none mb-4"></textarea>
            <button type="submit" class=" w-20 bg-primary-vivid text-white py-2 rounded hover:bg-primary-dark transition">Post</button>
        </div>
    </div>
</form>