<div class="col-12 col-md-9 d-flex flex-column">
   
        <div class="card-body">
            <h2 class="mb-4">College Info</h2>

            <h3 class="card-title mt-4">College Profile</h3>
            <form wire:submit.prevent="submit_new_pic" class="card">
                <div class="row g-3">
                    <div class="col-md">
                        <div class="form-label">Upload College Logo</div>
                        <input type="file" class="form-control" wire:model="images" multiple>
                    </div>
                </div>
                <div class="card-footer bg-transparent mt-auto">
                        <div class="btn-list justify-content-end">
                    
                            <button class="btn btn-primary">Add New
                                Image</button>
                        </div>
                </div>
            </form>
        @foreach($college_gallery_pics as $image)

            <img src="{{ asset(Storage::url($image->college_image)) }}" alt="College Image" style="width: 200px; height: auto; margin: 10px;">
            <div><a href="" wire:click="deleteImage({{$image->id}})">Delete</a></div>
        @endforeach
        </div>
    
</div>