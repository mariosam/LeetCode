/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class FindWordsContainingCharacterTest {

    @Test
	public void testFindWordsContainingCharacter() throws Exception {
        //Test 1
        List<Integer> want = List.of(0,1);
        List<Integer> got = FindWordsContainingCharacter.findWordsContaining( new String[]{"leet","code"}, 'e' );
        assertEquals(new ArrayList<>(want), got);
        //assertEquals(want, got);
        //Test 2
        want = List.of(0, 2);
        got = FindWordsContainingCharacter.findWordsContaining( new String[]{"abc","bcd","aaaa","cbc"}, 'a' );
        assertEquals(new ArrayList<>(want), got);
       // assertEquals(want, got);
        //Test 3
        want = List.of();
        got = FindWordsContainingCharacter.findWordsContaining( new String[]{"abc","bcd","aaaa","cbc"}, 'z' );
        assertEquals(new ArrayList<>(want), got);
       // assertEquals(want, got);
	}

}
