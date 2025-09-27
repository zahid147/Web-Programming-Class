<style>
    .centered {
        text-align: center;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    th, td {
        border: 3px solid white;
    }
</style>

<table border="1" width="800" align="center" style="text-align:center; border-collapse: collapse;">
    <tr>
        <th class="centered">Division</th>
        <th class="centered">District</th>
        <th class="centered">Police Station</th>
    </tr>
    <?php foreach ($data as $division => $districts) { ?>
        <?php $flag1 = false; ?>
        <?php foreach ($districts as $district => $policeStations) { ?>
            <?php $flag2 = false; ?>
            <?php foreach ($policeStations as $station) { ?>
                <tr>
                    <?php if (!$flag1) { ?>
                        <td rowspan="9" class="centered"><?php echo $division; ?></td>
                        <?php $flag1 = true; ?>
                    <?php } ?>
                    <?php if (!$flag2) { ?>
                        <td rowspan="3" class="centered"><?php echo $district; ?></td>
                        <?php $flag2 = true; ?>
                    <?php } ?>
                    <td class="centered"><?php echo $station; ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    <?php } ?>
</table>
