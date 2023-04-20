<?php

namespace Source\Support;

/**
 * Class Formatter
 * @package Source\Support
 */
class Formatter
{

    /**
     * @param null $dataTime
     * @return string
     */
    public function datetime_db($dataTime = null)
    {   
        if(!empty($dataTime))
        {
            $data_time = explode(" ", $dataTime);
            $data = explode("/", $data_time[0]);
            $time = explode(":", $data_time[1]);

            $data_time_formated = $data[2].'-'.$data[1].'-'.$data[0].' '.$time[0].':'.$time[1];
            return  $data_time_formated;
        }    
    }

    /**
     * @param null $dataTime
     * @return string
     */
    public function db_datetime($dataTime = null)
    {   
        if(!empty($dataTime))
        {
            $data_time = explode(" ", $dataTime);
            $data = explode("-", $data_time[0]);
            $time = explode(":", $data_time[1]);

            $data_time_formated = $data[2].'/'.$data[1].'/'.$data[0].' '.$time[0].':'.$time[1];
            return  $data_time_formated;
        }        
    }

    /**
     * @param null $dataTime
     * @param $mes
     * @return false|string
     */
    public function date_ret($dataTime = null, $mes)
    {
        if(!empty($dataTime))
        {
            $data_time = explode(" ", $dataTime);
            $data = explode("-", $data_time[0]);
            $time = explode(":", $data_time[1]);

            $data_time_formated = $data[2].'-'.$data[1].'-'.$data[0];

            $data_retorno = date('Y-m-d', strtotime("+".$mes." month", strtotime($data_time_formated)));

            return $data_retorno;
        }       
    }

    /**
     * @param $date
     * @return string
     */
    public function date_url($date)
    {
        if(!empty($date))
        {
            $data = explode('%', $date);
            $data_formated = $data[0].'-'.$data[1].'-'.$data[2];
            return $data_formated;
        }
    }

    /**
     * @param $temp
     * @return false|string
     */
    public function date_retorno($temp)
    {
        $data_retorno = date('Y-m-d', strtotime("+".$temp." day", strtotime(date('Y-m-d'))));
        return $data_retorno;       
    }

    /**
     * @param null $dataTime
     * @return string
     */
    public function db_date_time($dataTime = null)
    {   
        if(!empty($dataTime))
        {
            $data_time = explode(" ", $dataTime);
            $data = explode("-", $data_time[0]);
            $time = explode(":", $data_time[1]);

            $data_formated = $data[2].'/'.$data[1].'/'.$data[0];
            return  $data_formated;
        }        
    }

    /**
     * @param null $dataTime
     * @return string
     */
    public function date_db($dataTime = null)
    {   
        if(!empty($dataTime))
        {
            $data = explode("/", $dataTime);

            $data_formated = $data[2].'-'.$data[1].'-'.$data[0];
            return  $data_formated;
        }        
    }

    /**
     * @param null $dataTime
     * @return string
     */
    public function db_date($dataTime = null)
    {   
        if(!empty($dataTime))
        {
            $data = explode("-", $dataTime);

            $data_formated = $data[2].'/'.$data[1].'/'.$data[0];
            return  $data_formated;
        }        
    }

    /**
     * @param $tempo
     * @param $hora
     * @param $data
     * @return array
     */
    public function agenda_date($tempo, $hora, $data)
    {
        $agenda_hora = date('H:i:s', strtotime('+'.$tempo.' minute', strtotime($hora)));

        $agenda_data_hora_inicio = explode("/",  $data);
        $agenda_data_hora_inicio = $agenda_data_hora_inicio[2].'-'.$agenda_data_hora_inicio[1].'-'.$agenda_data_hora_inicio[0].' '.$hora;
            
        $agenda_data_fim = explode("/",  $data);
        $agenda_data_fim = $agenda_data_fim[2].'-'.$agenda_data_fim[1].'-'.$agenda_data_fim[0].' '.$agenda_hora;

        return array('data_fim' => $agenda_data_fim, 'data_inicio' => $agenda_data_hora_inicio, 'hora' =>  $agenda_hora);
    }

    /**
     * @param $valor
     * @return mixed
     */
    public function money_brl($valor)
    {   
        if(!empty($valor))
        {
            $formatter = new NumberFormatter('pt_BR',  NumberFormatter::CURRENCY);
            $r = $formatter->formatCurrency($valor, 'BRL');
            return $r;
        }    
    }

    /**
     * @param $get_valor
     * @return mixed
     */
    public function moeda($get_valor)
    {
        $source = array('.', ',');
        $replace = array('', '.');
        $valor = str_replace($source, $replace, $get_valor);
        return $valor;
    }

    /**
     * @param $get_valor
     * @return mixed
     */
    public function moeda_rev($get_valor)
    {
        $source = array('.');
        $replace = array(',');
        $valor = str_replace($source, $replace, $get_valor);
        return $valor;
    }

    /**
     * @param $get_valor
     * @return string
     */
    public function brl($get_valor)
    {   
        return number_format($get_valor, 2, ',', '.');
    }

    /**
     * @param $valor
     * @return mixed
     */
    public function money_brl_moeda($valor)
    {
        if(!empty($valor))
        {
            $formatter = new NumberFormatter('pt_BR',  NumberFormatter::CURRENCY);
            $r = $formatter->formatCurrency($this->moeda($valor), 'BRL');
            return $r;
        }    
    }

    /**
     * @param $valor
     * @return string
     */
    public function dinheiro($valor)
    {
        if(!empty($valor))
        {
            return 'R$ '.number_format($valor, 2, ',', '.');
        }
    }

    /**
     * @param $data
     * @return false|string
     */
    public function idade($data)
    {
        $dia = date('d');
        $mes = date('m');
        $ano = date('Y');

        $nascimento = explode('/', $data);
        $dianasc = ($nascimento[0]);
        $mesnasc = ($nascimento[1]);
        $anonasc = ($nascimento[2]);

        $idade = $ano - $anonasc;
        if ($mes < $mesnasc) 
        {
            $idade--;
            return $idade;
        }
        elseif ($mes == $mesnasc && $dia <= $dianasc)
        {
            $idade--;
            return $idade;
        }
        else
        {
            return $idade;
        }
    }

    /**
     * @param $phone
     * @return string
     */
    public function telefone($phone)
    {
        $formatedPhone = preg_replace('/[^0-9]/', '', $phone);
        $matches = [];
        preg_match('/^([0-9]{2})([0-9]{4,5})([0-9]{4})$/', $formatedPhone, $matches);
        if ($matches) {
            return '('.$matches[1].') '.$matches[2].'-'.$matches[3];
        }

        return $phone;
    }

    /**
     * @param $value
     * @return null|string|string[]
     */
    public function formatCnpjCpf($value)
    {
      $cnpj_cpf = preg_replace("/\D/", '', $value);
      
      if (strlen($cnpj_cpf) === 11) {
        return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
      } 
      
      return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
    }

    /**
     * @param $date
     * @return array
     */
    public function getDataExt($date)
    {
        if(!empty($date))
        {
            $data = explode("-", $date);

            $mes_ext = '';

            switch ($data[1])
            {
                case '01':
                    $mes_ext = 'Janeiro';
                    break;                
                case '02':
                    $mes_ext = 'Fevereiro';
                    break;                
                case '03':
                    $mes_ext = 'Março';
                    break;                
                case '04':
                    $mes_ext = 'Abril';
                    break;                
                case '05':
                    $mes_ext = 'Maio';
                    break;                
                case '06':
                    $mes_ext = 'Junho';
                    break;                
                case '07':
                    $mes_ext = 'Julho';
                    break;                
                case '08':
                    $mes_ext = 'Agosto';
                    break;                
                case '09':
                    $mes_ext = 'Setembro';
                    break;                
                case '10':
                    $mes_ext = 'Outubro';
                    break;                
                case '11':
                    $mes_ext = 'Novembro';
                    break;                
                case '12':
                    $mes_ext = 'Dezembro';
                    break;
            }

            return array('dia' => $data[2], 'mes' => $mes_ext, 'ano' => $data[0]);
        }
    }

} 
