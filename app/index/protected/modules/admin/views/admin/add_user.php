
<form id="submitForm" name="submitForm" action="/xngzf/archives/initFangyuan.action" method="post">
   
    <div id="container">
       
        <div class="ui_content">
            <table cellspacing="0" cellpadding="0" width="100%" align="left" border="0">
                <tr>
                    <td class="ui_text_rt" width="80">小区</td>
                    <td class="ui_text_lt">
                        <select name="fangyuanEntity.fyXqCode" id="fyXq" class="ui_select01"
                                onchange="getFyDhListByFyXqCode();">
                            <option value="">--请选择--</option>
                            <option value="6" selected="selected">瑞景河畔</option>
                            <option value="77">蔚蓝小区</option>
                            <option value="83">和盛园小区</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="ui_text_rt">栋号</td>
                    <td class="ui_text_lt">
                        <select name="fangyuanEntity.fyDhCode" id="fyDh" class="ui_select01">
                            <option value="">--请选择--</option>
                            <option value="16" selected="selected">瑞景河畔16号楼</option>
                            <option value="17">瑞景河畔17号楼</option>
                            <option value="69">瑞景河畔18号楼</option>
                            <option value="72">瑞景河畔20号楼</option>
                            <option value="73">瑞景河畔22号楼</option>
                            <option value="74">瑞景河畔23号楼</option>
                            <option value="75">瑞景河畔24号楼</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="ui_text_rt">层号</td>
                    <td class="ui_text_lt">
                        <input type="text" id="fyCh" name="fangyuanEntity.fyCh" value="1" class="ui_input_txt01"/>
                    </td>
                </tr>
                <tr>
                    <td class="ui_text_rt">房号</td>
                    <td class="ui_text_lt">
                        <input type="text" id="fyFh" name="fangyuanEntity.fyFh" value="112" class="ui_input_txt01"
                               onkeyup="checkFyFh();"/>室
                    </td>
                </tr>
                <tr>
                    <td class="ui_text_rt">房源面积</td>
                    <td class="ui_text_lt">
                        <input type="text" id="fyZongMj" name="fangyuanEntity.fyZongMj" value="67.47"
                               class="ui_input_txt01"/>㎡
                    </td>
                </tr>
                <tr>
                    <td class="ui_text_rt">计租面积</td>
                    <td class="ui_text_lt">
                        <input type="text" id="fyJizuMj" name="fangyuanEntity.fyJizuMj" value="67.47"
                               class="ui_input_txt01"/>㎡
                    </td>
                </tr>
                <tr>
                    <td class="ui_text_rt">户型</td>
                    <td class="ui_text_lt">
                        <select name="fangyuanEntity.fyHxCode" id="submitForm_fangyuanEntity_fyHxCode"
                                class="ui_select01">
                            <option value="">--请选择--</option>
                            <option value="76" selected="selected">一室一厅一卫</option>
                            <option value="10">两室一厅一卫</option>
                            <option value="14">三室一厅一卫</option>
                            <option value="71">三室两厅一卫</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="ui_text_rt">建筑结构</td>
                    <td class="ui_text_lt">
                        <select name="fangyuanEntity.fyJianzhuJiegou" id="submitForm_fangyuanEntity_fyJianzhuJiegou"
                                class="ui_select01">
                            <option value="">--请选择--</option>
                            <option value="38" selected="selected">混凝土</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="ui_text_rt">座落</td>
                    <td class="ui_text_lt">
                        <input type="text" id="fyZldz" name="fangyuanEntity.fyZldz" value="瑞景河畔16号楼1-112"
                               class="ui_input_txt02"/>
                    </td>
                </tr>
                <tr>
                    <td class="ui_text_rt">位置</td>
                    <td class="ui_text_lt">
                        <input type="text" id="fyPsdz" name="fangyuanEntity.fyPsdz" value="城中区" class="ui_input_txt02"/>
                    </td>
                </tr>
                <tr>
                    <td class="ui_text_rt">性质</td>
                    <td class="ui_text_lt">
                        <select name="fangyuanEntity.zulinXingzhi" id="submitForm_fangyuanEntity_zulinXingzhi"
                                class="ui_select01">
                            <option value="">--请选择--</option>
                            <option value="40" selected="selected">公租房</option>
                            <option value="41">廉租房</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="ui_text_rt">状态</td>
                    <td class="ui_text_lt">
                        <select name="fangyuanEntity.fyStatus" id="submitForm_fangyuanEntity_fyStatus"
                                class="ui_select01">
                            <option value="">--请选择--</option>
                            <option value="26">在建</option>
                            <option value="25">建成待租</option>
                            <option value="13" selected="selected">已配租</option>
                            <option value="12">已租赁</option>
                            <option value="24">腾退待租</option>
                            <option value="23">欠费</option>
                            <option value="27">其他</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="ui_text_lt">
                        &nbsp;<input id="submitbutton" type="button" value="提交" class="ui_input_btn01"/>
                        &nbsp;<input id="cancelbutton" type="button" value="取消" class="ui_input_btn01"/>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>

