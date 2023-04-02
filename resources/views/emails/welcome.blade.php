<p>Olá, {{ $user->first_name }},</p>
<p>Seja muito bem vindo ao {{ config('app.name') }}. Por favor, verifique seu e-mail clicando no botão abaixo:</p>

<table role="presentation" border="0" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td align="center">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td><a href="{{ $verifyEmailLink }}" target="_blank">VERIFICAR E-MAIL</a></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>

<p>Ou simplesmente clique copie e cole este link no seu navegador:</p>
<p>{{ $verifyEmailLink }}</p>