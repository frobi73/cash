<div class="col card col-sm-8">
    <form class="text-center border border-light p-5" action="#!">

        <p class="h4 mb-4">Invite Member</p>

        <!-- Name -->
        <input type="text" id="name" class="form-control mb-4" placeholder="Name" required>

        <!-- Email -->
        <input type="email" id="email" class="form-control mb-4" placeholder="E-mail" required>

        <input type="text" id="subject" class="form-control mb-4" placeholder="Subject" required>

        <!-- Message -->
        <div class="form-group">
            <textarea class="form-control rounded-0" id="message" rows="15"  placeholder="Message">Kedves xyz!

Mintaszöveg ide!


            </textarea>
        </div>

        <!-- Copy -->
        <div class="custom-control custom-checkbox mb-4">
            <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
            <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
        </div>

        <!-- Send button -->
        <button class="btn btn-info btn-block" id="grad" type="submit">Send</button>

    </form>
</div>
<!-- Default form contact -->