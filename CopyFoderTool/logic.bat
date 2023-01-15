#!/bin/bash

# 引数
num=5 #コピーしたいファイル数を入れる

base_fullname=$1
base_dir=`dirname ${base_fullname}`
base_name=`basename ${base_fullname}`

now_number=${base_name%%_*} #番号
will_number_base=`echo ${now_number} | sed 's/0*\([0-9]*[0-9]$\)/\1/g'` #0埋め解除
name=_${base_name#*_} #名前

n=0
#ループ
while [ $n -lt $num ]
do
	let will_number_base++
	will_number=$(printf "%06d" "${will_number_base}") #0埋め
	cp -r ${base_fullname} "${base_dir}/${will_number}${name}"
	let n++
done

echo `date` >> "${base_dir}/stdout.log"