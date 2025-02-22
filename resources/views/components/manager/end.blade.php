<!-- script -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<!-- end script -->

<script>
    document.getElementById('logoutButton').addEventListener('click', function() {
        const form = document.createElement('form');
        form.action = '{{ route("logout") }}';
        form.method = 'POST';
        form.innerHTML = '@csrf';
        document.body.appendChild(form);
        form.submit();
    });
</script>
</body>
</html>