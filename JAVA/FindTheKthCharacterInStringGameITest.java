/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindTheKthCharacterInStringGameITest {

    @Test
	public void testFindTheKthCharacterInStringGameI() throws Exception {
        //Test 1
        char want = 'b';
        char got = FindTheKthCharacterInStringGameI.kthCharacter( 5 );
        assertEquals(want, got);
        //Test 2
        want = 'c';
        got = FindTheKthCharacterInStringGameI.kthCharacter( 10 );
        assertEquals(want, got);
	}

}
