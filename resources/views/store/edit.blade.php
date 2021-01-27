<div class="row mt-3">
        <div class="col-md-8">
            <div class="float-left">
                <h2>Editer un élève</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="float-right">
                <a class="btn btn-outline-primary" href="{{ route('user.home') }}">Retour</a>
            </div>
        </div>
    </div>


    <form action="{{ route('user.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="full_name">Nom:</label>
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="full name" value="{{ $user->full_name }}">
        </div>

        <div class="form-group">
            <label for="email">Adresse:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{ $user->email }}">
        </div>


        <div class="form-group">
            <label for="password">password:</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="password" value="{{ $user->password }}">
        </div>

        <div class="form-group">
            <label for="phone">phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Description" value="{{ $user->phone }}">
        </div>

        <div class="form-group">
            <label for="area">area:</label>
            <input type="text" class="form-control" id="area" name="area" placeholder="area" value="{{ $user->area }}">
        </div>

        <div class="form-group">
            <label for="city">city:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="city" value="{{ $user->city }}">
        </div>

        <div class="form-group">
            <label for="zip">zip:</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="zip" value="{{ $user->zip }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
