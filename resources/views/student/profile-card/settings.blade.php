
<div class="card" >
    <div class="card-body">
        <h5 class="card-title">Settings</h5>
        <form action="{{ route('update-settings') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fist_name">First Name</label>
                        <input type="text" class="form-control" id="fist_name" name="first_name"
                               placeholder="First Name" required value="{{(!is_null($user)) ? $user->first_name : ''}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name"
                               placeholder="Last Name" required value="{{(!is_null($user)) ? $user->last_name : ''}}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="biography">Biography</label>
                        <textarea name="biography" id="biography" cols="30" rows="10" class="form-control">
                                {{ (!is_null($user) && !is_null($user->biography)) ? $user->biograpy : '' }}
                            </textarea>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email"  id="email" disabled class="form-control" value="{{(!is_null($user)) ? $user->email : ''}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="join_date">Joined On </label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="join_date"
                               disabled value="{{(!is_null($user)) ? $user->created_at->format('D d M Y') : ''}}">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-lg btn-primary">Update Detail</button>
            </div>

        </form>
    </div>
</div>
