<section class="h-dvh w-dvw text-center">
    <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800 md:text-5xl lg:text-6xl mt-14">
        Connection
    </h1>
    {$error}
    <form class="max-w-sm mx-auto mt-6" action="login.php" method="POST">
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Votre e-mail</label>
            <input type="email" id="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="exemple@exemple.com" required />
        </div>
        <div class="mb-5">
            <label for="mdp" class="block mb-2 text-sm font-medium text-gray-900 ">Votre mot de passe</label>
            <input type="password" id="mdp" name="mdp"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>
        <div class="mb-5 text-right"><a href="inscription.php"
                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">S'inscrire</a>
        </div>
        <div class="mb-5 flex justify-center">
            <button type="submit" name="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </div>
    </form>

</section>