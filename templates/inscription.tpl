<section class="h-screen w-dvw text-center">
    <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800 md:text-5xl lg:text-6xl mt-14">
        Inscription</h1>
    {$error}
    <form class="max-w-sm mx-auto mt-6" action="inscription.php" method="POST" enctype="multipart/form-data">
        <div class="mb-5">
            <label for="nom" class="block mb-2 text-sm font-medium text-gray-900">Choisir votre nom</label>
            <input type="text" id="nom" name="nom"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Votre nom" required />
        </div>
        <div class="mb-5">
            <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900">Choisir votre prénom</label>
            <input type="text" id="prenom" name="prenom"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Votre prénom" required />
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Choisir votre e-mail</label>
            <input type="email" id="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="example@example.com" required />
        </div>
        <div class="mb-5">
            <label for="mdp" class="block mb-2 text-sm font-medium text-gray-900">Choisir votre mot de passe</label>
            <input type="password" id="mdp" name="mdp"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="photo">Charger votre photo:</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="photo" type="file" name="photo">
        </div>
        <div class="mb-5 flex justify-center">
            <button type="submit" name="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">S'inscrire</button>
        </div>
    </form>


</section>