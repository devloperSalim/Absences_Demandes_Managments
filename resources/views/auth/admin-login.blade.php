<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body>
    <div class="">
        <div
          class="min-h-screen w-full font-sans aliased flex flex-col"
        >
          <div
            class="flex-1 flex items-center bg-blue-500 py-12 relative"
          >
            <div
              class="h-1/2 w-full mx-auto absolute inset-x-0 top-0"
            ></div>
            <div class="max-w-xl mx-auto px-8 relative space-y-6">

              <div
                class="rounded-lg shadow bg-white overflow-hidden divide-y divide-gray-200"
              >
                <form
                  method="post"
                  action=""
                  class="px-8 pb-10 space-y-4"
                  action="{{ route('admin.login') }}"
                  method="POST"
                >
                @csrf
                  <h1
                    class="text-gray-600 bg-gradient-to-b from-gray-50 via-blue-50 to-gray-100 text-center py-4 mb-6 font-semibold border rounded-sm shadow-sm"
                  >
                    ISTA CITEY DE L'AIRE
                  </h1>
                  <h2 class="text-lg font-medium">Login</h2>
                  <div>
                    <label
                      for="email"
                      class="inline-block text-sm font-medium"
                    >
                      Email address
                    </label>
                    <input
                      type="email"
                      id="email"
                      autofocus="autofocus"
                      required=""
                      name="email"
                      autocomplete="email"
                      class="border border-gray-300 w-full shadow-sm mt-1 h-12 p-2"
                      value=""
                    />
                  </div>
                  <div>
                    <label
                      for="password"
                      class="inline-block text-sm font-medium"
                    >
                      Password
                    </label>
                    <input
                      type="password"
                      id=""
                      name="password"
                      required=""
                      placeholder=""
                      autocomplete="current-password"
                      class="border border-gray-300 w-full shadow-sm mt-1 h-12 p-2"
                    />
                  </div>
                  <div>
                    <input
                      type="checkbox"
                      id="remember"
                      name="remember"
                      class="form-checkbox"
                    />
                    <label for="remember" class="ml-2 text-sm">
                      Remember me
                    </label>
                  </div>
                  <button
                    class="bg-gradient-to-b from-[#0E9A54] via-green-600 to-[#0E9A54] inline-flex rounded-sm items-center justify-center text-sm font-medium border transition-all ease-in-out duration-100 focus:outline-none focus:shadow-outline border-[#0ca157] bg-[#0E9A54] text-white shadow hover:bg-green-400 hover:border-[#098c4a] focus:border-green-700 focus:bg-green-400 px-4 py-2 text-md flex w-full"
                  >
                    Log in
                  </button>
                  <div class="grid grid-cols-2 gap-4">
                    <a
                      target="_self"
                      href="{{ route('admins.create') }}"
                      class="inline-flex items-center justify-center text-sm font-medium border transition-all ease-in-out duration-100 focus:outline-none focus:shadow-outline border-gray-300 bg-white text-gray-900 shadow-sm hover:bg-gray-50 focus:border-gray-400 focus:bg-white px-3 py-2 text-sm flex w-full"
                    >
                      Register
                    </a>
                    <a
                      target="_self"
                      href=""
                      class="inline-flex items-center justify-center text-sm font-medium border focus:outline-none focus:shadow-outline border-gray-300 bg-white text-gray-900 shadow-sm hover:bg-gray-50 focus:border-gray-400 focus:bg-white px-3 py-2 text-sm flex w-full"
                    >
                      Forgot password
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
