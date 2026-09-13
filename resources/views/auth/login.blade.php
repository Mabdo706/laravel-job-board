<x-layout-simple :title="$pageTitle">
<main class="bg-gray-50 flex items-center justify-center min-h-screen p-4 md:p-8 dark:bg-neutral-900">
   <div class="w-full max-w-md mx-auto">
      <div class="w-full p-6 shadow-sm rounded-lg bg-white border border-slate-300 sm:p-8 dark:bg-neutral-800 dark:border-neutral-700">
         
         <div class="mb-8 text-center">
            <h1 class="text-slate-900 text-2xl font-bold dark:text-slate-50">Login with your account</h1>
         </div>

         <form class="space-y-6" action="/login" method="POST">
            @csrf

            <div>
               <label for="email" class="mb-2 text-slate-900 font-medium text-sm inline-block dark:text-slate-50">Email</label>
               <input type="email" value="{{ old('email') }}" id="email" name="email" placeholder="john@readymadeui.com" required
                  class="px-3 py-2.5 text-sm text-slate-900 rounded-md bg-white w-full outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 dark:text-slate-50 dark:bg-neutral-700 dark:outline-neutral-600" />
            </div>

            <div>
               <label for="password" class="mb-2 text-slate-900 font-medium text-sm inline-block dark:text-slate-50">Password</label>
               <input type="password" id="password" name="password" placeholder="••••••••" required
                  class="px-3 py-2.5 text-sm text-slate-900 rounded-md bg-white w-full outline-1 -outline-offset-1 outline-slate-300 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 dark:text-slate-50 dark:bg-neutral-700 dark:outline-neutral-600" />
            </div>

            <div class="flex items-start flex-wrap gap-2">
                 <label class="flex items-center cursor-pointer group">
                     <input id="tmc" name="tmc" type="checkbox" required class="sr-only" />
                     
                     <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded border-2 border-slate-400 bg-slate-100 transition-all group-has-[input:checked]:bg-blue-600 group-has-[input:checked]:border-blue-600">
                         <svg class="size-3.5 text-white opacity-0 group-has-[input:checked]:opacity-100"
                             viewBox="0 0 12 10" fill="none" stroke="currentColor" stroke-width="2.5">
                             <path d="M1 5l3 3 7-7" />
                         </svg>
                     </span>

                     <span class="ml-3 text-sm text-slate-700 dark:text-slate-300">
                         I accept the
                     </span>
                 </label>

                 <a href="#" class="ml-1 text-sm font-medium text-blue-700 dark:text-blue-500 hover:underline">
                     Terms and Conditions
                 </a>
            </div>

            <button type="submit"
               class="w-full py-2.5 px-3.5 text-sm rounded-md font-semibold cursor-pointer tracking-wide text-white border border-blue-600 bg-blue-600 hover:bg-blue-700 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
               Login
            </button>
            
            @if ($errors->any())
                 @foreach ($errors->all() as $error)
                 <div class="text-red-500 text-sm text-center">
                     {{ $error }}
                 </div>
                 @endforeach
            @endif
         </form>

      </div>
   </div>
</main>
</x-layout-simple>