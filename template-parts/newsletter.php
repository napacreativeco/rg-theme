<style>
    .comp__newsletter {
        background: var(--black);
        color: var(--white);
        padding: 20px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: stretch;
    }
    .comp__newsletter .info,
    .comp__newsletter .action {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .comp__newsletter .info {
        padding: 20px 30px 20px 20px;
    }
    .comp__newsletter .action input {
        width: 100%;
        max-width: 400px;
        border: var(--border-wht);
        padding: 10px 0px;
        background: transparent;
        color: var(--white);
    }   
    .comp__newsletter h4 {
        margin: 0;
    }
</style>

<section class="comp__newsletter">
    <div class="info">
        <h4 class="headline">Sign up for exclusive email offers</h4>
        <p>Join our occassional Newsletter for exclusive deals and coupons</p>
    </div>
    <div class="action">
        <input type="email" />
    </div>
</section>