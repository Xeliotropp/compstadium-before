<div>
    <div class="py-3 py-md-4 checkout mt-5">
        <div class="container">
            <h4>Разплащане</h4>
            <hr>

            @if ($totalAmount != null)
            <div class="row">
                <div class="col-md-12 mb-4">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-primary">
                            Дължима сума :
                            <span class="float-end">{{ $totalAmount * 1.79 }}лв.</span>
                        </h4>

                        <hr>
                        <small>* Продуктите ще бъдат доставени от 3-5 работни дни</small>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-primary">
                            Основна информация
                        </h4>
                        <hr>

                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Имена на купувача</label>
                                    <input type="text" wire:model.defer="fullname" class="form-control" id="fullname"
                                        placeholder="Въведете трите си имена..." />
                                    @error('fullname')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Телефонен номер</label>
                                    <input type="text" wire:model.defer="phone" class="form-control" id="phone"
                                        placeholder="Въведете своят телефонен номер" />
                                    @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Имейл адрес</label>
                                    <input type="email" wire:model.defer="email" class="form-control" id="email"
                                        placeholder="Въведете имейл адрес" />
                                    @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>Пощенски код</label>
                                    <input type="text" wire:model.defer="pincode" class="form-control col-md-4"
                                        id="pincode" placeholder="Въведете пощенски код" />
                                    @error('pincode')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Адрес на доставка</label>
                                    <textarea wire:model.defer="address" class="form-control" rows="1"
                                        id="address"></textarea>
                                    @error('address')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>Избере опция на плащане: </label>
                                    <div class="d-md-flex align-items-start">
                                        <div class="nav col-md-3 flex-column nav-pills me-3" id="v-pills-tab"
                                            role="tablist" aria-orientation="vertical">
                                            <button wire:loading.attr="disabled" class="nav-link active fw-bold"
                                                id="cashOnDeliveryTab-tab" data-bs-toggle="pill"
                                                data-bs-target="#cashOnDeliveryTab" type="button" role="tab"
                                                aria-controls="cashOnDeliveryTab" aria-selected="true">В брой</button>
                                            <button wire:loading.attr="disabled" class="nav-link fw-bold"
                                                id="onlinePayment-tab" data-bs-toggle="pill"
                                                data-bs-target="#onlinePayment" type="button" role="tab"
                                                aria-controls="onlinePayment" aria-selected="false">Онлайн
                                                плащане</button>
                                        </div>
                                        <div class="tab-content col-md-9" id="v-pills-tabContent">
                                            <div class="tab-pane active show fade" id="cashOnDeliveryTab"
                                                role="tabpanel" aria-labelledby="cashOnDeliveryTab-tab" tabindex="0">
                                                <h6></h6>
                                                <hr />
                                                <button type="button" wire:loading.attr="disabled" wire:click="codOrder"
                                                    class="btn btn-primary">
                                                    <span wire:loading.remove wire:target="codOrder">
                                                        Плащане (в брой)
                                                    </span>
                                                    <span wire:loading wire:target="codOrder">
                                                        Обработване на информацията
                                                    </span>
                                                </button>

                                            </div>
                                            <div class="tab-pane fade" id="onlinePayment" role="tabpanel"
                                                aria-labelledby="onlinePayment-tab" tabindex="0">
                                                <hr />
                                                <div wire:ignore>
                                                    <div id="paypal-button-container">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
            @else
            <div class="card card-body shadow text-center p-md-5">
                <h4>Няма продукти в количката за плащане</h4>
                <a href="{{ url('collections') }}" class="btn btn-primary">Пазарувайте Сега</a>
            </div>
            @endif
        </div>
    </div>
</div>

<!-- sb-odsdq25475744@personal.example.com
    V%ky8u5C
-->
@push('scripts')
<script
    src="https://www.paypal.com/sdk/js?client-id=Adi8CNpdIfYcgBrfTAURqzHmqZrb1CF8EuxaYQHb93MHOCcJrs0H0GcIKG0nYh9QshSSdSQyskbOqAdP&currency=USD">
</script>
<script>
    paypal.Buttons({
        onClick() {
        // Show a validation error if the checkbox is not checked
            if (!document.getElementById('fullname').value
                ||!document.getElementById('phone').value
                ||!document.getElementById('email').value
                ||!document.getElementById('pincode').value
                ||!document.getElementById('address').value
            ) {
                Livewire.emit('validationForAll');
                return false;
        
            }
            else{
                @this.set('fullname',document.getElementById('fullname').value);
                @this.set('phone',document.getElementById('phone').value);
                @this.set('email',document.getElementById('email').value);
                @this.set('pincode',document.getElementById('pincode').value);
                @this.set('address',document.getElementById('address').value);
            }

        },

        // Order is created on the server and the order id is returned

        createOrder(data, actions) {
        
        return actions.order.create({
            purchase_units:[{
                amount:{
                    value: "{{$this->totalAmount}}"
                }
            }]
        });
        
        },
    

    
    // Finalize the transaction on the server after payer approval
    
    onApprove(data, actions) {
    
        return actions.order.capture().then(function(orderData){
            console.log('Capture result',orderData,JSON.stringify(orderData,null,2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            if(transaction.status == "COMPLETED"){
                Livewire.emit('transactionEmit',transaction.id);
            }
        });
    
    },
    
    }).render('#paypal-button-container');
    
</script>
@endpush