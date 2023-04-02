<p>Olá, {{ $user->first_name }},</p>
<p>Você solicitou a mudança de senha no {{ config('app.name') }}. Mude sua senha clicando no botão abaixo:</p>

<table role="presentation" border="0" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td align="center">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td><a href="{{ $resetPasswordLink }}" target="_blank">RESETAR SENHA</a></td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>

<p>Ou simplesmente clique copie e cole este link no seu navegador:</p>
<p>{{ $resetPasswordLink }}</p>