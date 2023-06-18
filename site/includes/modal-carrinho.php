<!-- Modal -->
<div class="modal fade" id="cartModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content produto border-0">
						
						<div class="modal-body pt-5">
							<div class="col">
								<a class="btn btn-light" data-dismiss="modal"><i class="fa-solid fa-arrow-left"></i></a>
							</div>
							<div class="text-center text-dark mb-5">
								<h2 class="display-4 titulo-cart">Meu Carrinho</h2>
							</div>

							<?php if ($resultsCarts) { ?>

								<form action="index.php?acao=up" method="post">
									<div class="table-responsive">
										<table class="table text-dark table-light table-striped rounded">
											<thead>
												<tr>

													<th class="text-center">Produto</th>
													<th class="text-center col-2">Peso (Kg)</th>
													<th class="text-center">Preço</th>
													<th class="text-center">Subtotal</th>
													<th class="text-center">Ação</th>

												</tr>
											</thead>
											<tbody>
												<?php foreach ($resultsCarts as $result) : ?>
													<tr>

														<td class="text-center px-3"><?php echo $result['name'] ?></td>
														<td class="text-center">
															
															<input class="form-control" type="number" min="1" max="10" name="prod[<?php echo $result['id'] ?>]" value="<?php echo $result['quantity'] ?>" size="1" />
											
														</td>
														<td class="text-center">R$<?php echo number_format($result['price'], 2, ',', '.') ?></td>
														<td class="text-center">R$<?php echo number_format($result['subtotal'], 2, ',', '.') ?></td>
														<td><a href="index.php?acao=del&id=<?php echo $result['id'] ?>" class="btn btn-danger btn-block"><i class="fa-solid fa-trash"></i></a></td>

													</tr>
												<?php

												endforeach; ?>
												<tr>
													<td colspan="3" class="text-right"><b>Total: </b></td>
													<td colspan="2" class="text-left">R$<?php echo number_format($totalCarts, 2, ',', '.') ?></td>

												</tr>
											</tbody>

										</table>
									</div>

									<div class="d-flex flex-wrap justify-content-center">
						
										<div class="col-lg-7 my-2">
											<button class="btn btn-block btn-primary" type="submit"><i class="fa-solid fa-arrows-rotate"></i><span> Atualizar valores</span></button>
										</div>
										
									</div>

								</form>
								<form action="<?php echo URL;?>realizar-pedido" method="post">

												<input type="hidden" name="pedido" value="<?php foreach ($resultsCarts as $result) : echo $result["quantity"] . ' Kg de ' . '(#' . $result["id"] . ') '. $result["name"] . ';<br>'; endforeach; ?>">
												<input type="hidden" name="valorTotal" value="<?php echo $totalCarts; ?>">

												<input type="hidden" name="dataPedido" id="dataPedido" value="
                            						<?php

                            						$timezone  = new DateTimeZone('America/Sao_Paulo');
                            						$dataAtual = new DateTime('now', $timezone);
													echo $dataAtual->format('Y-m-d H:i:s');

                            						?>"
												>
												<input type="hidden" name="dataStatus" id="dataStatus" value="
                            						<?php

                            						$timezone  = new DateTimeZone('America/Sao_Paulo');
                            						$dataAtual = new DateTime('now', $timezone);
													echo $dataAtual->format('Y-m-d H:i:s');

                            						?>"
												>
												<input type="hidden" name="status" value="1">
												<div class="col-lg-7 mx-auto my-2">
													<button type="submit" class="btn btn-block btn-success"><i class='fa-solid fa-money-bill-wave'></i><span> Finalizar Pedido</span></button>
												</div>
											</form>
							<?php
							} else {
								echo '
								
									<div class="alert alert-danger border-0" role="alert">
										<h4 class="alert-heading text-center">Seu carrinho está vázio</h4>
										<p class="lead text-center">Tente adicionar itens ao carrinho</p>
									</div>
								
								';
							}
							?>
						</div>

					</div>
				</div>
			</div>