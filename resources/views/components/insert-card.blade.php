<div class="card">
    <div class="card-header">Insert Vcard</div>
    <div class="card-body">
        <form action="/store" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Full Name</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter name Eg:- Jyooti" class="form-control">
                @error("name")
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Contact</label>
                <input type="number" name="contact" value="{{ old('contact') }}" placeholder="Enter name Eg:- 98074633" class="form-control">
                @error("contact")
                    <p class="text-danger small">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">

                <button type="submit" class="btn btn-info w-100">Insert Vcard</button>
            </div>
        </form>
    </div>
</div>