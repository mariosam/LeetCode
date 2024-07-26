/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.List;

public class SortTheJumbledNumbers {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", sortJumbled( new int[]{0,1,2}, new int[]{0,1,2} ));
    }

    public static int[] sortJumbled(int[] mapping, int[] nums) {
        List<Item> items = new ArrayList<>();
        for (int i = 0; i < nums.length; i++) {
            int mapped = mapNumber(nums[i], mapping);
            items.add(new Item(nums[i], i, mapped));
        }
        Collections.sort(items, new Comparator<Item>() {
            @Override
            public int compare(Item a, Item b) {
                if (a.mapped != b.mapped) {
                    return a.mapped - b.mapped;
                }
                return a.index - b.index;
            }
        });
        int[] result = new int[nums.length];
        for (int i = 0; i < items.size(); i++) {
            result[i] = items.get(i).item;
        }
        return result;
    }

    private static int mapNumber(int number, int[] mapping) {
        String numStr = Integer.toString(number);
        StringBuilder mappedStr = new StringBuilder();
        for (char c : numStr.toCharArray()) {
            mappedStr.append(mapping[c - '0']);
        }
        return Integer.parseInt(mappedStr.toString());
    }

    static class Item {
        int item;
        int index;
        int mapped;

        Item(int item, int index, int mapped) {
            this.item = item;
            this.index = index;
            this.mapped = mapped;
        }
    }

}
