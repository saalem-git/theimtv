<!DOCTYPE html>
<html>

<head>
    @include('partials.head')
</head>

<body>

    @include('partials.menu')
    
    <div class="container">
        <form class="form-horizontal" style="margin-top: 111px;">
            <fieldset>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">name</label>
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" type="text" placeholder="name" class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">last name</label>
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" type="text" placeholder="last name" class="form-control input-md">

                    </div>
                </div>

                <!-- Profile img -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="filebutton">Profile Picture</label>
                    <div class="col-md-4">
                        <input id="filebutton" name="filebutton" class="input-file" type="file">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">birthday</label>
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" type="text" placeholder="birthday" class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">contact email address</label>
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" type="text" placeholder="contact email address" class="form-control input-md">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">phone</label>
                    <div class="col-md-4">
                        <input id="textinput" name="textinput" type="text" placeholder="phone" class="form-control input-md">

                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Country</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="selectbasic" class="form-control">
                            <option value="1">Malaysia</option>
                            <option value="2">USA</option>
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">gender</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="selectbasic" class="form-control">
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textarea">Address</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="textarea" name="textarea">address</textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">submit</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>

    <@include('partials.footer')

</body>
</html>