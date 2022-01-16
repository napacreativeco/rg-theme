<style>
    ul.products {
        list-style: none;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        align-items: stretch;
        grid-gap: 20px;
        margin: 0 auto 0 auto;
        padding: 80px 10px;
        width: 100%;
        max-width: 1200px;
    }
    ul.products li.product {
        display: flex;
        flex-direction: column;
        background: var(--white);
        box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        height: 420px;
        position: relative;
        margin: 0;
        width: 100%;
        max-width: 400px;
    }
    /* Image */
    ul.products li .image {
        height: 80%;
        width: 100%;
    }
    /* Info */
    ul.products li .info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 20%;
        padding: 0px 40px;
    }
    ul.products li .info a {
        text-decoration: none;
    }
    ul.products li .info .title p {
        font-size: 1.2rem;
        color: var(--black);
    }
    ul.products li .info .price span {
        color: var(--grey);
    }
    ul.products li .info p {
        margin: 0 0 4px 0;
        color: var(--black);
    }
    ul.products .actions.left {
        position: absolute;
        top: auto;
        right: auto;
        bottom: 4px;
        left: 12px;
    }
    ul.products .actions.right {
        position: absolute;
        top: auto;
        right: 14px;
        bottom: 4px;
        left: auto;
    }
    ul.products .actions svg {
        width: 25px;
        fill: var(--black);
    }
    ul.products .actions .cart-adder {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }
    ul.products .sale {
        padding: 10px;
    }
    ul.products .sale {
        padding: 10px;
    }
    
    /* MEDIA QUERIES */
    @media (max-width: 1199.98px) {
        
    }

    @media (max-width: 991.98px) {
        /* Loop */
        ul.products {
            grid-template-columns: 1fr 1fr;
        }
        ul.products li {
            margin: 0 0 16px 0;
        }
    }

    @media (max-width: 767.98px) {
        /* Loop */
        ul.products {
            grid-template-columns: 1fr;
            grid-gap: 40px;
        }
        ul.products li {
            width: 100%;
        }
    }

    @media (max-width: 575.98px) {

    }
</style>