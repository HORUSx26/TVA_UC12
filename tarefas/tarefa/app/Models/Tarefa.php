<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Tarefa extends Model
{
use HasFactory;
protected $fillable = [
'tarefa_titulo',
'tarefa_descricao',
'tarefa_status',
'tarefa_data',
'tarefa_prioridade', ];
}