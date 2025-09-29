export function useFlash() {
    function flash(message) {
        swal('Success!', message, 'success');
    }

    return { flash };
}