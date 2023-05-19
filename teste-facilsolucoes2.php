SELECT Tb_banco.nome AS nome_banco, Tb_convenio.verba,
       MIN(Tb_contrato.data_inclusao) AS data_inclusao_min,
       MAX(Tb_contrato.data_inclusao) AS data_inclusao_max,
       SUM(Tb_contrato.valor) AS soma_valor
FROM Tb_contrato
JOIN Tb_convenio_servico ON Tb_contrato.convenio_servico = Tb_convenio_servico.codigo
JOIN Tb_convenio ON Tb_convenio_servico.convenio = Tb_convenio.codigo
JOIN Tb_banco ON Tb_convenio.banco = Tb_banco.codigo
GROUP BY Tb_banco.nome, Tb_convenio.verba
