<style>
    /* Woocommerce */
/* Notices */
.woocommerce-notices-wrapper .woocommerce-message {
    width: 100%;
    background: var(--black);
    color: var(--white);
    padding: 20px;
    font-size: 0.8rem;
    display: flex;
    justify-content: center;
    align-items: center;
}
.woocommerce-notices-wrapper a {
    display: none;
}
div.quantity {
    display: flex;
    flex-direction: row;
    align-items: stretch;
}


/* ======================================================================================= */
/* ===========================MEDIA QUERIES=============================================== */
/* ======================================================================================= */
@media (max-width: 575.98px) {

}
@media (max-width: 767.98px) {
    .woocommerce-notices-wrapper .woocommerce-message {
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .woocommerce-notices-wrapper .woocommerce-message a {
        margin: 0 0 20px 0;
    }
}
@media (max-width: 991.98px) {
    
}
@media (max-width: 1199.98px) {
    
}
</style>