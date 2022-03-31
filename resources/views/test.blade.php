<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"
        integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    test
    <form action="api/token">
        @csrf

        <!-- Equivalent to... -->
        {{-- <input type="hidden" name= "_token" value="{{ csrf_token() }}" /> --}}
        <button></button>
    </form>

    <script>
        axios.interceptors.request.use(function(config) {
            // Do something before request is sent
            console.log('axios before', config);
            config.headers['Authorization'] = `Bearer 4|2GsrJ0kE6kBgFdQHQuVTMtv8F74zCsymK8BgnTWB`
            return config;
        }, function(error) {
            // Do something with request error
            return Promise.reject(error);
        });

        data = {
            email: 'test@test.com',
            name: 'name-test',
            password: '12345678'
        }
    </script>
</body>

</html>
