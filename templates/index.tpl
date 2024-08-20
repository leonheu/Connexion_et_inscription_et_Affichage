<section class="h-dvh w-dvw">
    <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800 md:text-5xl lg:text-6xl text-center mt-14">
        Ma page d'accueil</h1>
        {foreach $user as $key => $val}
            {if $key == 'photo'}
                <div class="flex flex-col items-center bg-slate-300 border border-zinc-700 mt-6">
                    <p class="mb-3">{$key}</p>
                    <img src="img/{$val}" alt="photo" class="w-28 h-40 mb-3">
                </div>
            {else}
                <div class="flex justify-center bg-slate-300 border border-zinc-700 mt-6">
                    <p>{$key} ==> {$val}</p>
                </div>
            {/if}
        {/foreach}

    <form action="index.php" method="post">
        <div class="mb-5 mt-5 flex justify-center">
            <button type="submit" name="logout"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Se déconnecter</button>
        </div>
    </form>
</section>