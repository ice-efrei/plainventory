<div id="login_success_alert" class="rounded-md bg-green-50 p-4 absolute top-0 left-1/2 -translate-x-[50%] -translate-y-[150%] m-4  transform transition ease-in-out duration-500">
    <div class="flex">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <p class="text-sm font-medium text-green-800">
                Connexion réussie
            </p>
        </div>
        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
                <button id="close_login_success" type="button" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">
                    <span class="sr-only">Dismiss</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    function showLoginSuccessAlert() {
        document.getElementById('login_success_alert').classList.remove('-translate-y-[150%]');
        setTimeout(() => {
            document.getElementById('login_success_alert').classList.add('-translate-y-[150%]');
        }, 3000);
    }
    function hideLoginSuccessAlert() {
        if (document.getElementById('login_success_alert').classList.contains('-translate-y-[150%]')) return;
        document.getElementById('login_success_alert').classList.add('-translate-y-[150%]');
    }
    document.getElementById('close_login_success').addEventListener('click', hideLoginSuccessAlert);
    // if ?login=success
    if (window.location.search.includes('login=success')) {
        showLoginSuccessAlert();
    }
</script>

<div id="login_failed_alert" class="rounded-md bg-red-50 p-4 absolute top-0 left-1/2 -translate-x-[50%] m-4 -translate-y-[150%] transform transition ease-in-out duration-500">
    <div class="flex">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-red-800">
                Echec de la connexion
            </h3>
        </div>
    </div>
</div>
<script>
    function showLoginFailedAlert() {
        document.getElementById('login_failed_alert').classList.remove('-translate-y-[150%]');
        setTimeout(() => {
            document.getElementById('login_failed_alert').classList.add('-translate-y-[150%]');
        }, 3000);
    }
    function hideLoginFailedAlert() {
        if (document.getElementById('login_failed_alert').classList.contains('-translate-y-[150%]')) return;
        document.getElementById('login_failed_alert').classList.add('-translate-y-[150%]');
    }
    // if ?login=failed
    if (window.location.search.includes('login=failed')) {
        showLoginFailedAlert();
    }
</script>

<div id="register_success_alert" class="rounded-md bg-green-50 p-4 absolute top-0 left-1/2 -translate-x-[50%] m-4 -translate-y-[150%] transform transition ease-in-out duration-500">
    <div class="flex">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <p class="text-sm font-medium text-green-800">
                Inscription réussie
            </p>
        </div>
        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
                <button id="close_login_success" type="button" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">
                    <span class="sr-only">Dismiss</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    function showRegisterSuccessAlert() {
        document.getElementById('register_success_alert').classList.remove('-translate-y-[150%]');
        setTimeout(() => {
            document.getElementById('register_success_alert').classList.add('-translate-y-[150%]');
        }, 3000);
    }
    function hideRegisterSuccessAlert() {
        if (document.getElementById('register_success_alert').classList.contains('-translate-y-[150%]')) return;
        document.getElementById('register_success_alert').classList.add('-translate-y-[150%]');
    }
    document.getElementById('register_success_alert').addEventListener('click', hideRegisterSuccessAlert);
    // if ?login=success
    if (window.location.search.includes('register=success')) {
        showRegisterSuccessAlert();
    }
</script>

<div id="register_failed_alert" class="rounded-md bg-red-50 p-4 absolute top-0 left-1/2 -translate-x-[50%] m-4 -translate-y-[150%] transform transition ease-in-out duration-500">
    <div class="flex">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-red-800">
                Echec de l'inscription
            </h3>
        </div>
    </div>
</div>
<script>
    function showRegisterFailedAlert() {
        document.getElementById('register_failed_alert').classList.remove('-translate-y-[150%]');
        setTimeout(() => {
            document.getElementById('register_failed_alert').classList.add('-translate-y-[150%]');
        }, 3000);
    }
    function hideRegisterFailedAlert() {
        if (document.getElementById('register_failed_alert').classList.contains('-translate-y-[150%]')) return;
        document.getElementById('register_failed_alert').classList.add('-translate-y-[150%]');
    }
    // if ?login=failed
    if (window.location.search.includes('register=failed')) {
        showRegisterFailedAlert();
    }
</script>

<div id="add_spool_success_alert" class="rounded-md bg-green-50 p-4 absolute top-0 left-1/2 -translate-x-[50%] m-4 -translate-y-[150%] transform transition ease-in-out duration-500">
    <div class="flex">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <p class="text-sm font-medium text-green-800">
                Ajout de bobine réussi
            </p>
        </div>
        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
                <button id="close_add_spool_success" type="button" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">
                    <span class="sr-only">Dismiss</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    function showAddSpoolSuccessAlert() {
        document.getElementById('add_spool_success_alert').classList.remove('-translate-y-[150%]');
        setTimeout(() => {
            document.getElementById('add_spool_success_alert').classList.add('-translate-y-[150%]');
        }, 3000);
    }
    function hideAddSpoolSuccessAlert() {
        if (document.getElementById('add_spool_success_alert').classList.contains('-translate-y-[150%]')) return;
        document.getElementById('add_spool_success_alert').classList.add('-translate-y-[150%]');
    }
    document.getElementById('close_add_spool_success').addEventListener('click', hideAddSpoolSuccessAlert);
    // if ?login=success
    if (window.location.search.includes('add_spool=success')) {
        showAddSpoolSuccessAlert();
    }
</script>

<div id="add_spool_failed_alert" class="rounded-md bg-red-50 p-4 absolute top-0 left-1/2 -translate-x-[50%] m-4 -translate-y-[150%] transform transition ease-in-out duration-500">
    <div class="flex">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-red-800">
                Echec de l'ajout de bobine
            </h3>
        </div>
<!--        <div class="mt-2 text-sm text-red-700">-->
<!--            <ul role="list" class="list-disc space-y-1 pl-5">-->
<!--                <li>Your password must be at least 8 characters</li>-->
<!--                <li>Your password must include at least one pro wrestling finishing move</li>-->
<!--            </ul>-->
<!--        </div>-->
        <?php
            // list the errors in the ?error=panda;panda;... format
            if (isset($_GET['error'])) {
                $errors = explode(';', $_GET['error']);
                echo('<div class="mt-2 text-sm text-red-700">');
                echo('<ul role="list" class="list-disc space-y-1 pl-5">');
                foreach ($errors as $error) {
                    echo("<li>$error</li>");
                }
                echo('</ul>');
                echo('</div>');
            }
        ?>
    </div>
</div>
<script>
    function showAddSpoolFailedAlert() {
        document.getElementById('add_spool_failed_alert').classList.remove('-translate-y-[150%]');
        setTimeout(() => {
            document.getElementById('add_spool_failed_alert').classList.add('-translate-y-[150%]');
        }, 3000);
    }
    function hideAddSpoolFailedAlert() {
        if (document.getElementById('add_spool_failed_alert').classList.contains('-translate-y-[150%]')) return;
        document.getElementById('add_spool_failed_alert').classList.add('-translate-y-[150%]');
    }
    // if ?login=failed
    if (window.location.search.includes('add_spool=failed')) {
        showAddSpoolFailedAlert();
    }
</script>

<div id="delete_spool_success_alert" class="rounded-md bg-green-50 p-4 absolute top-0 left-1/2 -translate-x-[50%] m-4 -translate-y-[150%] transform transition ease-in-out duration-500">
    <div class="flex">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <p class="text-sm font-medium text-green-800">
                Suppression de bobine réussie
            </p>
        </div>
        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
                <button id="close_delete_spool_success" type="button" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">
                    <span class="sr-only">Dismiss</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    function showDeleteSpoolSuccessAlert() {
        document.getElementById('delete_spool_success_alert').classList.remove('-translate-y-[150%]');
        setTimeout(() => {
            document.getElementById('delete_spool_success_alert').classList.add('-translate-y-[150%]');
        }, 3000);
    }
    function hideDeleteSpoolSuccessAlert() {
        if (document.getElementById('delete_spool_success_alert').classList.contains('-translate-y-[150%]')) return;
        document.getElementById('delete_spool_success_alert').classList.add('-translate-y-[150%]');
    }
    document.getElementById('close_delete_spool_success').addEventListener('click', hideDeleteSpoolSuccessAlert);
    // if ?login=success
    if (window.location.search.includes('delete_spool=success')) {
        showDeleteSpoolSuccessAlert();
    }
</script>

<div id="delete_spool_failed_alert" class="rounded-md bg-red-50 p-4 absolute top-0 left-1/2 -translate-x-[50%] m-4 -translate-y-[150%] transform transition ease-in-out duration-500">
    <div class="flex">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-red-800">
                Echec de la suppression de bobine
            </h3>
        </div>
    </div>
</div>
<script>
    function showDeleteSpoolFailedAlert() {
        document.getElementById('delete_spool_failed_alert').classList.remove('-translate-y-[150%]');
        setTimeout(() => {
            document.getElementById('delete_spool_failed_alert').classList.add('-translate-y-[150%]');
        }, 3000);
    }
    function hideDeleteSpoolFailedAlert() {
        if (document.getElementById('delete_spool_failed_alert').classList.contains('-translate-y-[150%]')) return;
        document.getElementById('delete_spool_failed_alert').classList.add('-translate-y-[150%]');
    }
    // if ?login=failed
    if (window.location.search.includes('delete_spool=failed')) {
        showDeleteSpoolFailedAlert();
    }
</script>

<div id="spool_not_found_error" class="rounded-md bg-red-50 p-4 absolute top-0 left-1/2 -translate-x-[50%] m-4 -translate-y-[150%] transform transition ease-in-out duration-500">
    <div class="flex">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <h3 class="text-sm font-medium text-red-800">
                Bobine introuvable
            </h3>
        </div>
    </div>
</div>
<script>
    function showSpoolNotFoundError() {
        document.getElementById('spool_not_found_error').classList.remove('-translate-y-[150%]');
        setTimeout(() => {
            document.getElementById('spool_not_found_error').classList.add('-translate-y-[150%]');
        }, 3000);
    }
    function hideSpoolNotFoundError() {
        if (document.getElementById('spool_not_found_error').classList.contains('-translate-y-[150%]')) return;
        document.getElementById('spool_not_found_error').classList.add('-translate-y-[150%]');
    }
    // if ?login=failed
    if (window.location.search.includes('error=spool_not_found')) {
        showSpoolNotFoundError();
    }
</script>

<div id="logout_success" class="rounded-md bg-green-50 p-4 absolute top-0 left-1/2 -translate-x-[50%] m-4 -translate-y-[150%] transform transition ease-in-out duration-500">
    <div class="flex">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="ml-3">
            <p class="text-sm font-medium text-green-800">
                Déconnexion réussie
            </p>
        </div>
        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
                <button id="close_logout_success" type="button" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">
                    <span class="sr-only">Dismiss</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    function showLogoutSuccessAlert() {
        document.getElementById('logout_success').classList.remove('-translate-y-[150%]');
        setTimeout(() => {
            document.getElementById('logout_success').classList.add('-translate-y-[150%]');
        }, 3000);
    }
    function hideLogoutSuccessAlert() {
        if (document.getElementById('logout_success').classList.contains('-translate-y-[150%]')) return;
        document.getElementById('logout_success').classList.add('-translate-y-[150%]');
    }
    document.getElementById('close_logout_success').addEventListener('click', hideLogoutSuccessAlert);
    // if ?login=success
    if (window.location.search.includes('logout=success')) {
        showLogoutSuccessAlert();
    }
</script>