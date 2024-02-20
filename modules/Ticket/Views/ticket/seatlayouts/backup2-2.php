<div style="border-width: 8px; border-style: solid; border-color: rgb(119, 119, 119) rgb(211 213 215) rgb(195 195 195); max-width: 320px; width: 100%; height: 100%; margin: 0px auto; background-color: #fff;">
    <div style="display: flex; justify-content: space-between; align-items: center; padding: 15px 0px; border-bottom: 1px solid rgb(217 217 217)">
        <div style="position: relative">
            <img src="<?php echo base_url('public/image/arrow-right.png') ?>" alt="" style="height: 60px; width: 60px; display: block; transition: all 0.4s ease 0s" />
            <p style="padding: 0px; margin: 0px; position: absolute; left: 40%; top: 54%; text-transform: uppercase; transform: translate(-50%, -50%); transition: all 0.4s ease 0s; font-size: 13px; color: rgb(68, 68, 68); font-weight: 700">Door</p>
        </div>
        <img src="<?php echo base_url('public/image/steering.svg') ?>" alt="" style="max-width: 42px; height: 65px; width: 100%; margin-right: 12px" />
    </div>

    <div style="border-bottom: 1px solid rgb(217 217 217); padding: 5px 0px">
        <input type="hidden" id="<?php echo 'seatnumber' . $subTripId; ?>" name="<?php echo 'seatnumber' . $subTripId; ?>[]" value="">

        <?php
        $seatGroups = array_chunk($seatNumbers, 4);
        $lastSeat && $lastSeatArr = array_pop($seatGroups);
        foreach ($seatGroups as $i => $singleGroup) :
        ?>
            <ul style="display: grid; grid-template-columns: repeat(5, 1fr); align-items: flex-start; -webkit-box-pack: center; justify-content: center; list-style: none; margin: 0px; padding: 5px 0px">

                <?php
                foreach ($singleGroup as $j => $singleSeat) :
                    $seatLabelThumb = in_array($singleSeat, $bookedSeats) ? 'booked' : 'available';
                ?>
                    <li style="cursor: pointer; margin: auto; position: relative; user-select: none;">
                        <div onclick="<?php echo "seacClick(this, $subTripId, '$seatLabelThumb');"; ?>" data-seatnumber="<?php echo $singleSeat; ?>">
                            <img src="<?php echo base_url("public/image/seat{$seatLabelThumb}.svg") ?>" alt="" style="width: 35px; display: block; transition: all 0.4s ease 0s" />
                            <p style="padding: 0px; margin: 0px; position: absolute; left: 50%; top: 40%; transform: translate(-50%, -50%); transition: all 0.4s ease 0s; font-size: 10px; color: rgb(68, 68, 68); font-weight: 900"><?php echo $singleSeat; ?></p>
                        </div>
                    </li>

                    <?php if ($j == 1) : ?>
                        <?php if ($lastSeat && $i === array_key_last($seatGroups)) : ?>
                            <li style="cursor: pointer; margin: auto; position: relative; user-select: none;">
                                <div onclick="<?php echo "seacClick(this, $subTripId, '$seatLabelThumb');"; ?>" data-seatnumber="<?php echo $singleSeat; ?>">
                                    <img src="<?php echo base_url("public/image/seat{$seatLabelThumb}.svg") ?>" alt="" style="width: 35px; display: block; transition: all 0.4s ease 0s" />
                                    <p style="padding: 0px; margin: 0px; position: absolute; left: 50%; top: 40%; transform: translate(-50%, -50%); transition: all 0.4s ease 0s; font-size: 10px; color: rgb(68, 68, 68); font-weight: 900"><?php echo current($lastSeatArr); ?></p>
                                </div>
                            </li>
                        <?php else : ?>
                            <li style="cursor: pointer; margin: auto; position: relative"></li>
                        <?php endif; ?>
                        
                    <?php endif; ?>

                <?php endforeach; ?>

            </ul>
        <?php endforeach; ?>

    </div>
</div>