/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;
import java.util.HashSet;
import java.util.Map;

public class MaximumNumberOfBalloons {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxNumberOfBalloons("nlaebolko"));
    }

    public static int maxNumberOfBalloons(String text) {
        HashMap<Character, Integer> map = new HashMap<>();
        HashSet<Character> set = new HashSet<>();

        char[] words = text.toCharArray();
        int count = 0;

        for(int i = 0; i < words.length; i++)
        {
            count = map.getOrDefault(words[i], 0);
            count++;
            map.put(words[i], count);
        }
        
        int min = text.length();

       
        for(Map.Entry<Character, Integer> entry : map.entrySet())
        {
            if(entry.getKey() == 'b' || entry.getKey() == 'a' || entry.getKey() == 'n')
            {
                min = Math.min(min, entry.getValue());
                set.add(entry.getKey());
            }
                
            
            if(entry.getKey() == 'o' || entry.getKey() == 'l')
            {
                min = Math.min(min, entry.getValue() / 2);
                set.add(entry.getKey());
            }
                
        }
            

        return set.size() == 5 ? min : 0;
    }
}
