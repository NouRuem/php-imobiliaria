/*****************************************************************/
/********* GERAL *************************************************/
/*****************************************************************/

console.log("LOGIN!!!");


/*****************************************************************/
/********* LOGIN - PRINCIPAL *************************************/
/*****************************************************************/

// const input_login_usuario = $("#input_login_usuario");
// const span_login_usuario = $("#span_login_usuario");

// const input_login_senha = $("#input_login_senha");
// const span_login_senha = $("#span_login_senha");

// const btn_login_entrar = $("#btn_login_entrar");


/*****************************************************************/
/********* LOGIN - VALIDAÇÕES ************************************/
/*****************************************************************/

// var valida_login_usuario = false;
// var valida_login_senha = false;

// /**
//  * Valida o campo de usuário.
//  *
//  * @param string local Local que será efetuada a validação.
//  *
//  * @return bool
//  *
//  */
// function validaUsuario(local)
// {
//   valida_login_usuario = false;

//   // Verifica o local para validaçao.
//   if(local === "login")
//   {
//     const usuario = input_login_usuario.val().trim();

//     // Verifica se foi preenchido algo.
//     if(usuario.length === 0)
//     {
//       input_login_usuario.addClass("is-invalid");
//       span_login_usuario.html("Digite o nome do usuário.");

//       valida_login_usuario = false;
//     }
//     else
//     {
//       input_login_usuario.removeClass("is-invalid");
//       span_login_usuario.html("");

//       valida_login_usuario = true;
//     }
//   }
// }

// /**
//  * Executa todas as validações de acordo com o local indicado.
//  *
//  * @param string local Local que será efetuada a validação.
//  *
//  * @return bool
//  *
//  */
//  function verificarValidacoes(local)
//  {
//    // Verifica qual o local.
//    if(local === "login")
//    {
//     validaUsuario(local);

//     // Verifica o resultado de todas as validações.
//     if(valida_login_usuario === true)
//     {
//       return true;
//     }
//     else
//     {
//       return false;
//     }
//   }
// }
