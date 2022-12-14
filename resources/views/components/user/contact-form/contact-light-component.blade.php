<div class="container mt-5">
    <form action="{{ route('mail.send') }}" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-text text-black">Name</label>
                    <input type="text" class="form-control" id="" placeholder="" name="name">
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-text text-black">Email address</label>
                    <input type="email" class="form-control" id="" placeholder="" name="mail">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-text text-black">Phone No.</label>
                    <input type="tel" class="form-control" id="" placeholder="" name="phone">
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-end mt-5">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleFormControlInput1" class="form-text text-black">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="9" name="message"></textarea>
                </div>
                <div class="text-center">
                    <input type="submit" class="contact-submit-button py-2" value="Submit"/>

                    @if(session('success') != null)

                        <br><br>
                        <p style="text-align: center; color: white">Message sent successfully</p>

                    @endif
                </div>
            </div>

        </div>

    </form>
</div>

<style>
    .form-control{
        border-radius: 20px !important;
        padding: 1.6rem !important;
    }
    .form-text{
        text-align: center !important;
        font-weight: 700;
        font-size: 16px;
    }
    .contact-submit-button{
        background-color: #255302;
        border-radius: 20px;
        border:none;
        width:140px;
        font-weight: 700;
        color: #E2EFD9;
    }
</style>
