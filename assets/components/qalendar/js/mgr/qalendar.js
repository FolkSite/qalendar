/**
 * https:/quasi-art.ru
 * 2017
 */

window.onload = function() {
    /**
     * Инициализация обёртки интерфейса
     */
    function initWrapper() {
        /**
         * Устанавливаю два CSS-свойства для обёртки содержимого CMP, так как иначе у CMP отсутствует прокрутка.
         * Обёртке нужно установить высоту, равную высоте, например, левой панели (дерева ресурсов, элементов и медиа).
         */
        var modxLeftbar = document.querySelector('#modx-leftbar');
        var pricesWrapper = document.querySelector('.prices-wrapper');
        if (typeof modxLeftbar == 'object' && modxLeftbar !== null && typeof pricesWrapper == 'object' && pricesWrapper !== null) {
            var height = parseInt(modxLeftbar.offsetHeight);
            if (height > 0) {
                pricesWrapper.style.height = height + 'px';
            }
            pricesWrapper.style.overflow = 'scroll';
        }
    }

    initWrapper();
};
