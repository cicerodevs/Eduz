@extends('layout.index')

@section('titulo','Finalizar compra')

@section('conteudo')
<?php define("URL", "http://localhost:8000/finalizar-compra/");?>
<script>
    function sl(){

      $('#pagseguro_token').val(PagSeguroDirectPayment.getSenderHash());
    }
</script>
<script type="text/javascript" src="{{asset('js/personalizar.js')}}"></script>

<script type="text/javascript" src=
"https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>


	<section id="curso" class="mt-5" style="background-color: #4e6967;background:linear-gradient(#29303B,#29303B,#29303B);
    color: #fff;">
    <div class="container p-3">
      <div class="curso-titulo p-4">
        <h2>Finalizar compra</h2>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-4 mt-5">
          <h5>Seu pedido</h5>
          <hr>
          <div class="row">
            <div class="col-4">
              <img src="{{asset($curso->imagem)}}" class="thumbnail" style="max-height: 50px;">
            </div>
            <div class="col-7" style="margin-left: -18px; line-height: 8px;">
              <h6>{{$curso->titulo}}</h6>
              <p>{{$curso->autor}}</p>
              <p class="" style="color: red;">{{  'R$ '.number_format($curso->valor, 2, ',', '.') }}</p>
            </div>
          </div>
        </div><!-- /col-lg-4 -->
        <div class="col-lg-8 mt-5">
          @if(Auth::user())
          <p class="" style="font-size: 2em;">{{  'R$ '.number_format($curso->valor, 2, ',', '.') }}</p>
          <div>
            
            <h4 class="mb-3">Escolha um método de pagamento:</h4>
            <div class="accordion" id="accordionExample">
              <div class="card" >
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <a href="" class="btn btn-link"data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <img src="{{asset('cartoes/pagseguro.png')}}" style="max-width: 150px;" title="PagSeguro">
                    </a>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <hr>
                   
                
                     <form >
                      {{ csrf_field() }}
                      
                      
                      <button onclick="pagamento()">pagar</button>
                      <span class="endereco" data-endereco="<?php echo URL;?>"></span>
                      <div class="row">
                        <div class="col-md-6 mb-3">
                          <label >Nome do Cartão</label>
                          <input type="text" class="form-control" id="holderName" name="holderName" placeholder="" required value="{{Auth::user()->nome.' '.Auth::user()->sobrenome}}">
                          <small class="text-muted">Nome completo conforme exibido no cartão</small>
                          <div class="invalid-feedback">
                            Name on card is required
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label >Número do Cartão de Crédito</label>
                          <input type="text" class="form-control" id="cardNumber" placeholder="" required>
                          <div class="invalid-feedback">
                            Credit card number is required
                          </div>
                        </div>
                      </div>

                      <div class="row">
                      <div class="col-md-3 mb-3">
                        <label >CPF</label>
                        <input type="text" class="form-control" id="holderCpf" name="holderCpf" placeholder="000.000.000-00" required>
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label >Aniversário</label>
                        <input type="text" class="form-control" id="holderBirthDate" name="holderBirthDate" placeholder="DD/MM/YYYY" required>
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label >Mês</label>
                        <select class="form-control" id="expirationMonth" name="expirationMonth">
                          @for($m = 1; $m <= 12; $m++)
                            <option value="{{ (strlen($m) == 1) ? '0' . $m : $m }}">{{ (strlen($m) == 1) ? '0' . $m : $m }}</option>
                          @endfor
                        </select>
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                      </div>
                       <div class="col-md-2 mb-3">
                        <label >Ano</label>
                        <select class="form-control" id="expirationYear" name="expirationYear">
                          @for($y = 2015; $y <= 2030; $y++)
                            <option value="{{ $y }}">{{ $y }}</option>
                          @endfor
                        </select>
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label >CVV</label>
                        <input type="text" class="form-control" id="cvv" placeholder="" required>
                        <div class="invalid-feedback">
                          Security code required
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label >Parcelas</label>
                        <select class="form-control" id="installments" name="installments">
                         @for($i = 1; $i <= 3; $i++)
                            <option value="{{ $i }}">
                                {{ $i . 'x de R$ ' .number_format($curso->valor / $i, 2, ',', '.') . ' sem juros' }}
                            </option>
                         @endfor
                        </select>
                        <div class="invalid-feedback">
                          Security code required
                        </div>
                      </div>
                    </div>

                      <button type="submit" onclick="sl()" class="btn p-3" style="background-color: red; color: #fff; ">
                      Pagar com cartão
                    </button>
                    <div id="loading" style="display: none" class="text-center">
                      <img src="{{ asset('images/load-horizontal.gif') }}">
                    </div>
                    </form>
                   
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <a href="" class="btn btn-link collapsed"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                     <img src="{{asset('cartoes/boleto.png')}}" style="max-width: 55px; " title="Boleto bancário">
                    </a>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    <hr>
                    Para concluir sua transação, redirecionaremos você para os servidores seguros da Adyen. <br><br>

                    Observação: <strong>pague seu boleto dentro de 5 dias para não ultrapassar a data de vencimento. Salve seu boleto ou encontre-o na página Histórico de compra.</strong>
                    Você obterá acesso ao curso dentro de 3 a 7 dias úteis após o pagamento.<br><br>
                    <form method="post" action="{{ route('boleto_action')}}">
                      {{ csrf_field() }}
                      <input type="hidden" name="pagseguro_token" id="pagseguro_token" >
                      <button  onclick="sl()" type="submit" class="btn p-3" style="background-color: red; color: #fff; ">
                      Pagar com boleto
                    </button>
                    </form>
                    
                  </div>
                </div>
               
              </div>
            </div>
             @else
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong><?php echo "Você precisa estar logado para finalizar esta compra! Estamos te redirecionando..."?></strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <meta http-equiv="refresh" content=2;url="{{ route('login') }}">
              
             @endif
          </div>
        </div><!-- /col-lg-8 -->
      </div><!-- /row -->
    </div><!-- /container -->
  </section>

@endsection
