/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindWordsThatCanBeFormedByCharactersTest {

    @Test
	public void testFindWordsThatCanBeFormedByCharacters() throws Exception {
        //Test 1
        int want = 6;
        int got = FindWordsThatCanBeFormedByCharacters.countCharacters( new String[]{"cat","bt","hat","tree"}, "atach" );
        assertEquals(want, got);
        //Test 2
        want = 10;
        got = FindWordsThatCanBeFormedByCharacters.countCharacters( new String[]{"hello","world","leetcode"}, "welldonehoneyr" );
        assertEquals(want, got);
	}

}
